<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{
                $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                $this->Image('ko-skt2.jpg',10,6,30);
                $this->cell(100,6,"Printed date : " . date('d/m/Y'),0,1,'R',1);
                //$this->Image(base_url().'assets/img/taskin-pdf.jpg', 10, 25,'20','20','jpeg');

                $this->Ln(12);
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->cell(25,6,'',0,0,'C',0);
                $this->cell(250,6,'Sistem Informasi Pengentasan Kemiskinan Kota Bandung',0,1,'L',1);

                $this->cell(25,6,'',0,0,'C',0);
                //$this->cell(250,8,'Report Data Kecamatan',0,1,'L',1);
                //$this->cell(100,6,"Periode : ".date('M Y'),0,1,'L',1);
                $this->cell(25,6,'',0,0,'C',0);
                //$this->cell(100,6,'Lokasi : Semarang, Jawa Tengah',0,1,'L',1);


                $this->Ln(5);
                $this->setFont('Arial','',8);
                $this->SetTextColor(255,255,255);
                $this->setFillColor(48,48,48);
                $this->cell(5,6,'No.',1,0,'C',1);
                $this->cell(25,6,'Nik',1,0,'C',1);
                $this->cell(30,6,'Nama',1,0,'C',1);
                $this->cell(17,6,'Tanggal Lahir',1,0,'C',1);
                $this->cell(8,6,'Usia',1,0,'C',1);
                $this->cell(50,6,'Alamat',1,0,'C',1);
                $this->cell(30,6,'Kelurahan',1,0,'C',1);
                $this->cell(30,6,'Kecamatan',1,1,'C',1);

	}

	function Content($data)
	{
            $ya = 46;
            $rw = 6;
            $no = 1;
                foreach ($data as $key) {
                        $this->setFont('Arial','',6);
                        $this->setFillColor(255,255,255);
                        $this->cell(5,10,$no,1,0,'L',1);
                      //  $this->cell(25,10,$key->nik,1,0,'L',1);
                        $this->cell(30,10,$key->nama,1,0,'L',1);
                        $this->cell(17,10,$key->tgllahir,1,0,'L',1);
                        $this->cell(8,10,$key->tempatlahir,1,0,'L',1);
                        $this->cell(50,10,$key->alamat,1,0,'L',1);
                      // $this->cell(30,10,$key->kelurahan,1,0,'L',1);
                        //$this->cell(30,10,$key->kecamatan,1,1,'L',1);
                        $ya = $ya + $rw;
                        $no++;
                }

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),210,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);

                $this->Cell(0,10,'copyright SiTaskin' . date('Y'),0,0,'L');
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}




$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output('laporan_sitaskin_berdasarkan_wilayah.pdf','D');
