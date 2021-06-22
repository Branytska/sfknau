<?php
	include "../incdb/connect_to_db.php";

    $date_from = $_POST['from_date'];
    $date_to = $_POST['to_date'];
    $group = $_POST['group'];
    define('FPDF_FONTPATH',"../fpdf/font/");
    require('../fpdf/fpdf.php'); 
    $pdf = new FPDF('P', 'pt', 'Letter');
    $pdf->AddPage(); 
    $pdf->AddFont('TimesNewRomanPSMT','','times.php');
    $text = iconv('utf-8', 'windows-1251', $text);
    $pdf->SetLeftMargin(100);
    $query = "SELECT study_groups.group_name from study_groups where study_groups.id = '".$group."'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_array($result);

    $pdf->SetFont('TimesNewRomanPSMT','', 10);
    date_default_timezone_set('UTC');
    $pdf->Cell(0,30,iconv('utf-8', 'windows-1251',"Дата формування звіту: ".date("Y-m-d H:i:s")),0,0,'L');
    $pdf->Ln();
    $pdf->SetFont('TimesNewRomanPSMT','', 16);
    $pdf->Cell(450,20,iconv('utf-8', 'windows-1251',"Звіт по групі "),0,0,'C');
    $pdf->Ln();
    $pdf->Cell(450,20,iconv('utf-8', 'windows-1251',$row['group_name']),0,0,'C');
    $pdf->Ln();
    $pdf->Cell(450,20,iconv('utf-8', 'windows-1251',"за період з ".$date_from." по ".$date_to),0,0, 'C');
    $pdf->Ln();
    $pdf->SetFont('TimesNewRomanPSMT','', 14);
    $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',"Викладач"),1,0,'C');
    $pdf->Cell(150,30,iconv('utf-8', 'windows-1251',"Дісципліна"),1,0,'C');
    $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',"Вид занняття"),1,0,'C');
    $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',"Кількість годин"),1,0,'C');
    $pdf->Ln();

    $query = "select teachers.teacher_name, subjects.subject_name, types_of_activities.activity_name, sum(main_activities.numbers_of_hours)
                from subjects, main_activities, teachers, types_of_activities
                where main_activities.subject_id = subjects.id 
                    and main_activities.activity_id = types_of_activities.id
                    and main_activities.group_id = ".$group."
                    and main_activities.teacher_id = teachers.id
                    and subjects.subject_name in (
                select subjects.subject_name
                from subjects, main_activities, teachers, types_of_activities
                where main_activities.subject_id = subjects.id 
                    and main_activities.activity_id = types_of_activities.id
                    and main_activities.group_id = ".$group."
                    and main_activities.teacher_id = teachers.id
                    and teachers.teacher_name in (
                        select teachers.teacher_name
                        from teachers, main_activities 
                        where main_activities.teacher_id = teachers.id 
                                and main_activities.group_id = ".$group."
                                and main_activities.date_activity between '".$date_from."' and '".$date_to."'
                            group by teachers.teacher_name))
                        and teachers.teacher_name in (
                            select teachers.teacher_name
                            from teachers, main_activities 
                            where  main_activities.group_id = ".$group."
                            and main_activities.teacher_id = teachers.id  
                                and main_activities.date_activity between '".$date_from."' and '".$date_to."'
                        group by teachers.teacher_name) 
                    group by teachers.teacher_name, subjects.subject_name, types_of_activities.activity_name";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    
    $header=array('Country','Capital','Area (sq km)','Pop. (thousands)');
    $sum = 0;
    if($result){    
       
        while ($row = mysqli_fetch_array($result)) {
            $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',$row['teacher_name']),'LR',0,'L',0);
            $pdf->Cell(150,30,iconv('utf-8', 'windows-1251',$row['subject_name']),'LR',0,'L',0);
            $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',$row['activity_name']),'LR',0,'L',0);
            $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',$row['sum(main_activities.numbers_of_hours)']),'LR',0,'C',0);
            $pdf->Ln();
            $sum += $row['sum(main_activities.numbers_of_hours)'];
        }
        $pdf->Cell(350,30,iconv('utf-8', 'windows-1251',"Загальна кількість годин: "),1,0,'L',0);
        $pdf->Cell(100,30,iconv('utf-8', 'windows-1251',$sum),1,0,'C',0);
    }
    $pdf->Output();

    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);