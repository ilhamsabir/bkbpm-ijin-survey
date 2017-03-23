<?php
/**
 * Created by Coffea Code.
 * User: Ilham Sabir
 * Date: 14/02/16
*/

//DATA


class M_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }

    public function getKodeGagal(){
            $q = $this->db->query("select MAX(RIGHT(kd_gagal,3)) as kd_max from tbl_gagal");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "G-".$kd;
    }

    public function getKodeBerita(){
            $q = $this->db->query("select MAX(RIGHT(kd_berita,3)) as kd_max from tbl_berita");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "B-".$kd;
    }

public function getKodeUser(){
        $q = $this->db->query("select MAX(RIGHT(kd_user,3)) as kd_max from tbl_user");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "U-".$kd;
    }

public function getKodeFile(){
        $q = $this->db->query("select MAX(RIGHT(kd_file,3)) as kd_max from tbl_file");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "F-".$kd;
    }


public function getKodeFileorg(){
        $q = $this->db->query("select MAX(RIGHT(kd_fileorg,3)) as kd_max from tbl_fileorg");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "G-".$kd;
    }


public function getKodeAnggota(){
        $q = $this->db->query("select MAX(RIGHT(kd_anggota,4)) as kd_max from tbl_anggota");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "A".$kd;
    }


    public function getKodeOtorisasi(){
            $q = $this->db->query("select MAX(RIGHT(kd_otorisasi,4)) as kd_max from tbl_otorisasi");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "O".$kd;
        }

    public function getKodeIjin(){
            $q = $this->db->query("select MAX(RIGHT(kd_ijin,4)) as kd_max from tbl_ijin");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "0001";
            }
            return "IOS".$kd;
        }

    public function getKodeSurat(){
            $q = $this->db->query("select MAX(RIGHT(nmsurat,3)) as kd_max from tbl_ijin");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "01";
            }
            return "".$kd;
        }

public function getKodeIjin1(){
        $q = $this->db->query("select MAX(RIGHT(kd_ijin1,4)) as kd_max from tbl_ijin1");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return "IOL".$kd;
    }

public function getKodeAduan(){
        $q = $this->db->query("select MAX(RIGHT(kd_aduan,3)) as kd_max from tbl_aduan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "A-".$kd;
    }


public function getKodeIndeks(){
        $q = $this->db->query("select MAX(RIGHT(kd_indeks,3)) as kd_max from tbl_indeks");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "I-".$kd;
    }


    public function getKodePesan(){
            $q = $this->db->query("select MAX(RIGHT(kd_pesan,3)) as kd_max from tbl_pesan");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "M-".$kd;
        }


 function getUser(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $query = $this->db->get();
        return $query->result();
     }

//LOGIN MASUK APLIKASI

function login($email, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
/*Daftar dan kirim ke email


/*grafikkepuasan */

public function graph()
    {
        $data = $this->db->query("SELECT * from tbl_indeks");
        return $data->result();
    }



 function ambil_imgktp($num,$offset){



         $dd = $this->session->userdata('ID');

      /*
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->join('tbl_user','tbl_user.kd_user = tbl_file.kd_user' ,'left');
        $this->db->where('kd_user',$dd);
        $this->db->where('kategori','iktp');

         $query = $this->db->get($num,$offset);
         return $query->result(); */
       return $this->db->query("
                select a.kd_file,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_file a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$dd' and a.kategori='iktp' ")->result();
    }

  function ambil_imgfoto($num,$offset){



       $dd = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_file,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_file a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$dd' and a.kategori='ifoto' ")->result();
    }

  function ambil_fileproposal($num,$offset){



       $dd = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_file,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_file a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$dd' and a.kategori='fproposal' ")->result();
    }

 function ambil_filesk($num,$offset){



       $dd = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_file,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_file a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$dd' and a.kategori='fsk' ")->result();
    }

    function ambil_fileskkampus($num,$offset){

          $dd = $this->session->userdata('ID');
          return $this->db->query("
                   select a.kd_file,a.kd_user,a.foto,a.ket,b.kd_user
                   from tbl_file a
                   left join tbl_user b on a.kd_user=b.kd_user
                   where b.kd_user='$dd' and a.kategori='fskkampus' ")->result();
       }



function userrijin(){
        //$this->db->order_by('nama_file', 'DESC');
       $dd = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_user,a.nama,a.alamat,b.kd_user
                from tbl_user a
                left join tbl_ijin b on a.kd_user=b.kd_user
                where b.kd_user='$dd'")->result();

    }


    function userData(){
            //$this->db->order_by('nama_file', 'DESC');
           $dd = $this->session->userdata('ID');
           return $this->db->query("
                    select * from tbl_user
                    where kd_user='$dd'")->result();

        }

        function userBiodata($id){
             return $this->db->query("
                        select * from tbl_user
                        where kd_user='$id'")->result();

            }


/* ORKESMAS */

 function ambil_imglambang($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='ilambang' ")->result();
    }

 function ambil_imgbendera($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='ibendera' ")->result();
    }


 function ambil_fileakte($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fakte' ")->result();
    }

function ambil_fileadart($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fadart' ")->result();
    }


 function ambil_filetujuan($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='ftujuan' ")->result();
    }

 function ambil_fileskp($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fskp' ")->result();
    }

 function ambil_filefotoktp($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='ffotoktp' ")->result();
    }

 function ambil_filedomisili($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fdomisili' ")->result();
    }

 function ambil_filenpwp($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fnpwp' ")->result();
    }

 function ambil_imgkantor($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='ikantor' ")->result();
    }

 function ambil_fileizin($num,$offset){



       $od = $this->session->userdata('ID');

       return $this->db->query("
                select a.kd_fileorg,a.kd_user,a.foto,a.ket,b.kd_user
                from tbl_fileorg a
                left join tbl_user b on a.kd_user=b.kd_user
                where b.kd_user='$od' and a.kategori='fizin' ")->result();
    }

/* END ORKESMAS DOKUMEN */


/* Monitoring dta */

function GetSpp(){

    $resi = $this->input->POST('resi');

    $this->db->select('*');
    $this->db->from('tbl_ijin');
    $this->db->where('kd_ijin', $resi);

     $query = $this->db->get();
       return $query->result();

   }

function GetOrmas(){

    $resi1 = $this->input->POST('resi1');

    $this->db->select('*');
    $this->db->from('tbl_ijin1');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('kd_ijin1', $resi1);
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }

   /* Moniorinmg end */

/* indeks sikap */
function getCounts1(){



   // $this->db->select('*');
    $this->db->select_sum('baik');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'sikap');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts2(){



   // $this->db->select('*');
    $this->db->select_sum('cukup');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'sikap');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts3(){



   // $this->db->select('*');
    $this->db->select_sum('kurang');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'sikap');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }

/* indeksPenanganan Pengaduan*/
function getCounts4(){



   // $this->db->select('*');
    $this->db->select_sum('baik');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'penanganan');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts5(){



   // $this->db->select('*');
    $this->db->select_sum('cukup');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
   $this->db->where('tanya', 'penanganan');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts6(){



   // $this->db->select('*');
    $this->db->select_sum('kurang');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'penanganan');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }


/* indeksprosedurPengaduan*/
function getCounts7(){



   // $this->db->select('*');
    $this->db->select_sum('baik');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'prosedur');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts8(){



   // $this->db->select('*');
    $this->db->select_sum('cukup');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
 $this->db->where('tanya', 'prosedur');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts9(){



   // $this->db->select('*');
    $this->db->select_sum('kurang');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
   $this->db->where('tanya', 'prosedur');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }

/* indeks Waktu Pengaduan*/
function getCounts10(){



   // $this->db->select('*');
    $this->db->select_sum('baik');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
    $this->db->where('tanya', 'prosedur');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts11(){



   // $this->db->select('*');
    $this->db->select_sum('cukup');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
 $this->db->where('tanya', 'prosedur');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }
function getCounts12(){



   // $this->db->select('*');
    $this->db->select_sum('kurang');
    $this->db->from('tbl_indeks');
    //$this->db->join('tbl_pribadi','tbl_sosialekonomi.nik = tbl_pribadi.nik');
   $this->db->where('tanya', 'waktu');
   // $this->db->where('jenis_pekerjaan', $pekerjaan);
     $query = $this->db->get();
       return $query->result();

   }






/* Data Ijin */
 function ambil_ijin($num,$offset){
    $this->db->order_by('tglajuan', 'ASC');
    $this->db->select('*');
    $this->db->from('tbl_ijin');
    $this->db->join('tbl_user','tbl_ijin.kd_user=tbl_user.kd_user','left');
      $this->db->where('tbl_ijin.verifikasi', '0');
    $this->db->limit($num,$offset);
    $query = $this->db->get();
       return $query->result();
    }

   //ijin verified
    function ambil_ijin1($num,$offset){


       $this->db->order_by('verifikasi', 'ASC');
       $this->db->order_by('tglajuan', 'ASC');
       $this->db->select('*');
       $this->db->from('tbl_ijin');
       $this->db->join('tbl_user','tbl_ijin.kd_user=tbl_user.kd_user','left');
       $this->db->where('tbl_ijin.verifikasi', '1');
       $this->db->limit($num,$offset);
       $query = $this->db->get();
          return $query->result();
       }

       function Getijin(){

           $resi = $this->input->POST('resi');

           $this->db->select('*');
           $this->db->from('tbl_ijin');
           $this->db->join('tbl_user','tbl_ijin.kd_user=tbl_user.kd_user','left');
           $this->db->where('tbl_ijin.kd_ijin', $resi);

            $query = $this->db->get();
              return $query->result();

          }


       function ambil_ormas($num,$offset){


           $this->db->order_by('verifikasi', 'ASC');
          $this->db->order_by('tglajuan', 'ASC');


          $this->db->select('*');
          $this->db->from('tbl_ijin1');
          $this->db->join('tbl_user','tbl_user.kd_user=tbl_ijin1.kd_user');
          $this->db->limit($num,$offset);
           $query = $this->db->get();
             return $query->result();

             }


             function Getormaslsm(){

                 $resi = $this->input->POST('resi');

                 $this->db->select('*');
                 $this->db->from('tbl_ijin1');
                 $this->db->join('tbl_user','tbl_ijin1.kd_user=tbl_user.kd_user','left');
                 $this->db->where('tbl_ijin1.kd_ijin1', $resi);

                  $query = $this->db->get();
                    return $query->result();

                }


//DATA DETAIL
function getDataSurvey(){

    $id = $this->uri->segment(3);
  //$id= $this->uri->segment(3);
    $this->db->select('*');
    $this->db->from('tbl_ijin');
    $this->db->join('tbl_user','tbl_user.kd_user=tbl_ijin.kd_user','left');
    $this->db->join('tbl_otorisasi', 'tbl_otorisasi.kd_otorisasi=tbl_ijin.kd_otorisasi','left');
    $this->db->where('kd_ijin', $id);
    $query = $this->db->get();
       return $query->result();

    }

    function getDataOrmas($id){


        $this->db->select('*');
        $this->db->from('tbl_ijin1');
        $this->db->join('tbl_user','tbl_user.kd_user=tbl_ijin1.kd_user');
         $this->db->where('kd_ijin1', $id);
         $query = $this->db->get();
           return $query->result();

        }


  function countSurvey(){

  return $this->db->query("SELECT COUNT(verifikasi) as jml from tbl_ijin where verifikasi = '0'")->result();

  }

   function countOrmas(){

   return $this->db->query("SELECT COUNT(verifikasi) as jml from tbl_ijin1 where verifikasi = '0'")->result();

   }

   function countPesan(){

     return $this->db->query("SELECT COUNT(status) as jml from tbl_pesan where status = '1'")->result();

   }

   function countAdu(){

    return $this->db->query("SELECT COUNT(*) as tot from tbl_aduan")->result();

   }

   function countPesanuser(){
      $i = $this->session->userdata('ID');
      return $this->db->query("SELECT COUNT(notif) as jml2 from tbl_pesan where notif = 'unread' and kd_user='$i'")->result();

   }

   function pesanUser(){
       $i = $this->session->userdata('ID');
      return $this->db->query("SELECT * from tbl_pesan where notif = 'unread' and kd_user='$i'")->result();

   }

/* count gagal  */

function countGagal(){
   $i = $this->session->userdata('ID');
   return $this->db->query("SELECT COUNT(*) as jmlpesan from tbl_gagal
                       where status = 'unread' and kd_user = '$i' ")->result();
 }


/* Notif Publik angka */
  function notifSurveySukses(){
     $i = $this->session->userdata('ID');
     return $this->db->query("SELECT COUNT(*) as jmlSurveySukses from tbl_ijin
                         where notif = 'unread' and kd_user = '$i' ")->result();
   }
   function countSurvey1(){
      $i = $this->session->userdata('ID');
      return $this->db->query("SELECT COUNT(*) as jml from tbl_ijin
                          where notif = 'unread' and kd_user = '$i' ")->result();
    }

    function countOrmas1(){

       $i = $this->session->userdata('ID');
    return $this->db->query("SELECT COUNT(*) as jml1 from tbl_ijin1
                           where kd_user = '$i' and verifikasi = '1' or verifikasi='2' or verifikasi='3'")->result();


     }

/* notif gagal verifikasi */
function pesanGagal(){

     $id= $this->session->userdata('ID');
     $this->db->order_by('kd_gagal', 'DESC');
     $this->db->select('*');
     $this->db->from('tbl_gagal');
     $this->db->where('kd_user', $id);
     $this->db->where('status', 'unread');
     $this->db->limit(3);
     $query = $this->db->get();
       return $query->result();

    }

    /* notif gagal publik verifikasi */
    function dataGagal(){

         $id= $this->session->userdata('ID');

         $this->db->order_by('kd_gagal', 'DESC');
         $this->db->select('*');
         $this->db->from('tbl_gagal');
         $this->db->join('tbl_ijin', 'tbl_ijin.kd_ijin=tbl_gagal.kd_ijin');
         $this->db->where('tbl_gagal.kd_user', $id);
         $this->db->where('tbl_ijin.verifikasi', '0');
         $query = $this->db->get();
           return $query->result();

        }
/* end notif publik angka */
/*notif tulisan */
function notifSurvey(){

    $id= $this->session->userdata('ID');

     $this->db->order_by('tglajuan', 'ASC');
     $this->db->select('*');
     $this->db->from('tbl_ijin');
     $this->db->where('kd_user', $id);
     $this->db->where('verifikasi', '1');
     $this->db->limit(3);
     $query = $this->db->get();
       return $query->result();

    }

    function notifOrmas1(){

        $id= $this->session->userdata('ID');

         $this->db->order_by('tglajuan', 'ASC');
         $this->db->select('*');
         $this->db->from('tbl_ijin1');
         $this->db->where('kd_user', $id);
         $this->db->where('verifikasi', '1');
         $this->db->limit(3);
         $query = $this->db->get();
           return $query->result();

        }

        function notifOrmas2(){

            $id= $this->session->userdata('ID');

             $this->db->order_by('tglajuan', 'ASC');
             $this->db->select('*');
             $this->db->from('tbl_ijin1');
             $this->db->where('kd_user', $id);
             $this->db->where('verifikasi', '2');
             $this->db->limit(3);
             $query = $this->db->get();
               return $query->result();

            }

            function notifOrmas3(){

                $id= $this->session->userdata('ID');

                 $this->db->order_by('tglajuan', 'ASC');
                 $this->db->select('*');
                 $this->db->from('tbl_ijin1');
                 $this->db->where('kd_user', $id);
                 $this->db->where('verifikasi', '3');
                 $this->db->limit(3);
                 $query = $this->db->get();
                   return $query->result();

                }




/* end notif tulisan */
/* DATA SURVEY */
/* Data Ijin */
 function ambil_datasurvey($num,$offset){

   $id = $this->session->userdata('ID');

   return $this->db->query("
            select a.*,b.kd_user,b.nama,b.nohp,b.alamat,b.email
            from tbl_ijin a
            left join tbl_user b on a.kd_user=b.kd_user
            where b.kd_user='$id' order by 'a.tglajuan ASC' ")->result();

       }

       function ambil_dataormas($num,$offset){

         $id = $this->session->userdata('ID');

         return $this->db->query("
                  select a.*,b.kd_user,b.nama,b.nohp,b.alamat,b.email
                  from tbl_ijin1 a
                  left join tbl_user b on a.kd_user=b.kd_user
                  where b.kd_user='$id' order by 'a.tglajuan ASC' ")->result();

             }

//proflie user

function ambil_profile($id){


  $this->db->select('*');
  $this->db->from('tbl_user');
  $this->db->where('kd_user', $id);

  $query = $this->db->get();
    return $query->result();
    }

    function ambil_profileid(){

    $id = $this->session->userdata('ID');
      $this->db->select('*');
      $this->db->from('tbl_user');
      $this->db->where('kd_user', $id);

      $query = $this->db->get();
        return $query->result();
        }
/* user lupas pa */
/* Pesan balasan ADUAN */
function ambil_aduan($num,$offset){

  $this->db->order_by('tgladuan', 'ASC');
  $this->db->select('a.*,b.*,c.status');
  $this->db->from('tbl_aduan as a');
  $this->db->join('tbl_user as b ','b.kd_user=a.kd_user','left');
  $this->db->join('tbl_pesan as c','c.kd_aduan=a.kd_aduan','left');
  $this->db->order_by('c.status', 'ASC');
  $this->db->limit($num,$offset);
   $query = $this->db->get();
     return $query->result();

  }
//Detail aduan_

function getDetailAduan(){


    $this->db->select('*');
    $this->db->from('tbl_aduan');
    $this->db->join('tbl_user','tbl_user.kd_user=tbl_aduan.kd_user');
     //$this->db->where('kd_aduan', $id);
     $query = $this->db->get();
       return $query->result();

    }

    /* Pesan balasanuser */
    function getpesanuser(){
      $id = $this->session->userdata('ID');
      $this->db->order_by('tglpesan', 'ASC');
      $this->db->select('*');
      $this->db->from('tbl_pesan');
      $this->db->where('kd_user', $id);
      //$this->db->limit($num,$offset);
       //query = $this->db->get();
       $query = $this->db->get();
       return $query->result(); //if data is true


      }

      function getpesannotifr(){
        $id = $this->session->userdata('ID');
        $this->db->order_by('tglpesan', 'ASC');
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->where('kd_user', $id);
        //$this->db->limit($num,$offset);
         //query = $this->db->get();
         $query = $this->db->get();
         if($query->num_rows() == 1) {
             return $query->result(); //if data is true
         } else {
             return false; //if data is wrong
         }

        }


//berita
  function ambil_berita($num,$offset){

    $this->db->order_by('tgl_b', 'ASC');
    $this->db->select('*');
    $this->db->from('tbl_berita');
    $this->db->limit($num,$offset);
    $query = $this->db->get();
      return $query->result();

      }

      function ambil_beritadepan($num,$offset){

        $this->db->order_by('tgl_b', 'DESC');
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->limit($num,$offset);
        $query = $this->db->get();
          return $query->result();

          }

          //DATA DETAIL
          function getDataBerita(){

            $id = $this->uri->segment(3);
            //$id= $this->uri->segment(3);
              $this->db->select('*');
              $this->db->from('tbl_berita');
              $this->db->where('slug_berita', $id);
              $query = $this->db->get();
                 return $query->result();

              }

function ambil_user($num,$offset){
        //$this->db->order_by('nama_file', 'DESC');
        $query = $this->db->get('tbl_user',$num,$offset);
        return $query->result();
    }





 function ambil_pass($key){


         return $this->db->query("SELECT * from tbl_user
                where md5(email) = '$key'")->result();

    }







}
