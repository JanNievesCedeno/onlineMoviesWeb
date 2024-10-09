<?php

function fetch_data ()
{
    require_once ('../backend/conecdb.php');
    $output = '';
    $total = "SELECT SUM(amount) as total FROM sales;";
    $result = mysqli_query($conex,$total);
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    $query = "SELECT sales_id FROM sales;";
    $result = mysqli_query($conex,$query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){

        $output .= '<tr>
            <td> '.$resultCheck.'</td>
            <td> $ '.$total.'</td>
            </tr>
            
            ';
   
    return $output; 
}
}



    require_once ('library/tcpdf.php');
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, "UTF-8", false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("Total Report");
    $pdf->SetHeaderData('','', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('helvetica');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 11);

    $pdf->AddPage();
    $pdf->Cell (180,10,"Total Report",'',1,'C');
    $content = '';
    $content .= '
    <table  border="1" cellspacing="0" cellpadding="3">                                      
        <tr>
            <th>Total Sales</th>
            <th>Total earnings</th>                                              
        </tr>
    ';
    
    $content .= fetch_data();
    $content .= '</table>';
    $pdf->writeHTML ($content);
    $pdf->Output();



