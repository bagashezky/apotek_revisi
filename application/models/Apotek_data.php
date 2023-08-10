<?php
/**
* This is Data Model
*/
class Apotek_data extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	function medicine()
    {
        return $this->db->get('obats');
    }
	function coa()
    {
        return $this->db->get('coa');
    }
	function dataakun()
    {
        return $this->db->get('akun');
    }
	function transaksi()
    {
        return $this->db->get('transaksi');
    }
	
	function jurnal_umum()
    {
        return $this->db->get('tbl_jurnal_umum');
    }


	function jurnal_umum_filter($bulan, $tahun)
    {
		$this->db->where('MONTH(tanggal)', $bulan);
		$this->db->where('YEAR(tanggal)', $tahun);
        return $this->db->get('tbl_jurnal_umum');
    }	

	function buku_besar($akun)
    {
		$this->db->select('*');
		$this->db->from('tbl_buku_besar');
		$this->db->where('nama_akun',$akun);
		$query = $this->db->get();
		return $query;
    }

    public function buku_besar_filter($akun, $bulan, $tahun) {
        $this->db->select('*');
        $this->db->from('tbl_buku_besar');
        $this->db->where('nama_akun', $akun);
        $this->db->where('MONTH(tanggal)', $bulan);
        $this->db->where('YEAR(tanggal)', $tahun);
        $query = $this->db->get();
        return $query;
    }

    public function pembelian_filter($bulan, $tahun) {
        $this->db->select('*');
        $this->db->order_by('tgl_beli', 'ASC');
        $this->db->where('MONTH(tgl_beli)', $bulan);
        $this->db->where('YEAR(tgl_beli)', $tahun);
        $run_q = $this->db->get('pembelian');
        return $run_q;
    }
    
    public function penjualan_filter($bulan, $tahun) {
        $q = "SELECT table_invoice.*, obats.harga_obat 
              FROM table_invoice 
              LEFT JOIN obats ON table_invoice.nama_obat = obats.nama_obat 
              WHERE MONTH(table_invoice.tgl_beli) = $bulan 
              AND YEAR(table_invoice.tgl_beli) = $tahun";
        $run_q = $this->db->query($q);
        return $run_q;
    }
    
    

    function category()
    {
        return $this->db->get('kategori_obat');
    }

    function supplier()
    {
        return $this->db->get('supplier');
    }

    function unit()
    {
        return $this->db->get('jenis_obat');
    }
    function nama_rak_penyimpanan()
    {
        return $this->db->get('rak_penyimpanan');
    }
	
    function cek_ju($where) {
		$this->db->select('*');
		$this->db->from('tbl_jurnal_umum');
		$this->db->where('tanggal',$where);
		$query = $this->db->get();
		return $query;
	}

    function tampil_ju() {
		$this->db->select('*');
		$this->db->from('tbl_jurnal_umum');
		$this->db->where('date_format(tanggal,"%m")',date('m'));
		$this->db->where('date_format(tanggal,"%Y")',date('Y'));
		$this->db->order_by('no','ASC');
		return $this->db->get();
	}

    function invoice()
    {
        $this->db->select('*');
            
            $this->db->select_sum('table_invoice.banyak');
        
            $this->db->group_by('ref');
            $this->db->order_by ('tgl_beli', 'DESC');

            $run_q = $this->db->get('table_invoice');
            return $run_q;
    }

    function penjualan()
    {
		$q = "SELECT table_invoice.*, obats.harga_obat FROM table_invoice LEFT JOIN obats ON table_invoice.nama_obat = obats.nama_obat";
        $run_q = $this->db->query($q);
        return $run_q;
    }


    function purchase()
    {
        $this->db->select('*');
            
            $this->db->select_sum('pembelian.banyak');
        
            $this->db->group_by('ref');
            $this->db->order_by ('tgl_beli', 'DESC');

            $run_q = $this->db->get('pembelian');
            return $run_q;
    }

    function pembelian()
    {
        $this->db->select('*');
		$this->db->order_by ('tgl_beli', 'ASC');
		$run_q = $this->db->get('pembelian');
		return $run_q;
    }

    function get_category()
    {
        $data = array();
        $query = $this->db->get('kategori_obat')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_kategori']] = $row['nama_kategori'];
        }
        }
        asort($data);
        return $data;
    }  
    function get_coa()
    {
        $data = array();
        $query = $this->db->get('coa')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
			foreach ($query as $row ) 
			{
			  $data[$row['nama_coa']] = $row['nama_coa'];
			}
        }
        asort($data);
        return $data;
    }  
	
    function get_categoryrak()
    {
		$data = array();
        $query = $this->db->get('rak_penyimpanan')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_rak_penyimpanan']] = $row['nama_rak_penyimpanan'];
        }
        }
        asort($data);
        return $data;
    }  
    function get_akunjurnal()
        {
            $data = array();
            $query = $this->db->get('akun')->result_array();

            if (is_array($query) && count($query) > 0) {
                foreach ($query as $row) {
                    if ($row['no_reff'] == '112') {
                        $data[$row['nama_reff']] = 'Persediaan Barang';
                    } elseif ($row['no_reff'] == '111') {
                        $data[$row['nama_reff']] = 'Kas';
                    } else {
                        $data[$row['nama_reff']] = $row['nama_reff'];
                    }
                }
            }
            
            asort($data);
            return $data;
        }
    function getTotalDebit()
        {
        $data = array(); // Menambahkan inisialisasi $data sebagai array

        $query = $this->db->select_sum('saldo')
                          ->from('transaksi')
                          ->where('jenis_saldo', 'debit')
                          ->get();

        $data['totalDebit'] = $query->row()->saldo;

        return $data;
        }

    function get_supplier()
    {
        $data = array();
        $query = $this->db->get('supplier')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_supplier']] = $row['nama_supplier'];
        }
        }
        asort($data);
        return $data;
    }

     

    function get_unit()
    {
        $data = array();
        $query = $this->db->get('jenis_obat')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['unit']] = $row['unit'];
        }
        }
        asort($data);
        return $data;
    }
	
    function get_penyimpanan()
    {
        $data = array();
        $query = $this->db->get('rak_penyimpanan')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_rak_penyimpanan']] = $row['nama_rak_penyimpanan'];
        }
        }
        asort($data);
        return $data;
    }

	function get_obat_by_nama($nama_obat)
	{
		$this->db->where('nama_obat', $nama_obat);
		$query = $this->db->get('obats');
		return $query->row();
	}
	
	function get_coa_by_nama($kode_coa)
	{
		$this->db->where('kode_coa', $kode_coa);
		$query = $this->db->get('coa');
		return $query->row();
	}
	function get_akun_by_nama($no_reff)
	{
		$this->db->where('no_reff', $no_reff);
		$query = $this->db->get('akun');
		return $query->row();
	}
	function get_rak_by_nama($nama_rak_penyimpanan)
	{
		$this->db->where('nama_rak_penyimpanan', $nama_rak_penyimpanan);
		$query = $this->db->get('rak_penyimpanan');
		return $query->row();
	}
	function get_kat_by_nama($nama_kategori)
	{
		$this->db->where('nama_kategori', $nama_kategori);
		$query = $this->db->get('kategori_obat');
		return $query->row();
	}
	function get_unit_by_nama($unit)
	{
		$this->db->where('unit', $unit);
		$query = $this->db->get('jenis_obat');
		return $query->row();
	}
    function get_medicine()
    {
        $data = array();
        $query = $this->db->get('obats')->result_array();

        if( is_array($query) && count ($query) > 0 )
        {
        foreach ($query as $row ) 
        {
          $data[$row['nama_obat']] = $row['nama_obat'];
        }
        }
        asort($data);
        return $data;
    }

      function get_product($nama_obat)
    {   $hasil = array();
        $hsl=$this->db->query("SELECT * FROM obats WHERE nama_obat='$nama_obat'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama_obat' => $data->nama_obat,
                    'jmlh_stok' => $data->jmlh_stok,
                    'unit' => $data->unit,
                    'harga_jual' => $data->harga_jual,
                    'harga_obat' => $data->harga_obat,
                    
                    );
            }
        }
        return $hasil;
    }

    function getmedbysupplier($nama_supplier){
        $hasil=$this->db->query("SELECT * FROM obats WHERE nama_supplier='$nama_supplier'");
        return $hasil->result();
    }
	
    function getcatbyrak($nama_kategori){
        $hasil=$this->db->query("SELECT * FROM kategori_obat WHERE nama_kategori='$nama_kategori'");
        return $hasil->result();
    }
    
    function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }  

    function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }

    function show_data($where, $table){      
        $this->db->select('*');
            $this->db->select_sum('banyak');
            $run_q = $this->db->get_where($table,$where);
            return $run_q;
    }

    function show_invoice($where, $table){      
        $this->db->select('*');
            $run_q = $this->db->get_where($table,$where);
            return $run_q;
    }


    function topDemanded($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(table_invoice.banyak) as 'totSold' FROM obats 
                INNER JOIN table_invoice ON obats.nama_obat=table_invoice.nama_obat AND YEAR(table_invoice.tgl_beli)= '$tahun_beli' GROUP BY table_invoice.nama_obat ORDER BY totSold DESC ";

        $run_q = $this->db->query($q);

        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totSold" => $data['totSold'],
                    
                );
            }
            return $hasil;
    }


    public function leastDemanded($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(table_invoice.banyak) as 'totSold' FROM obats 
                INNER JOIN table_invoice ON obats.nama_obat=table_invoice.nama_obat AND YEAR(table_invoice.tgl_beli)= '$tahun_beli' GROUP BY table_invoice.nama_obat ORDER BY totSold ASC ";

        $run_q = $this->db->query($q);

        
        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totSold" => $data['totSold'],
                    
                );
            }
            return $hasil;
    }

    public function highestEarners($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(table_invoice.subtotal) as 'totEarned' FROM obats 
                INNER JOIN table_invoice ON obats.nama_obat=table_invoice.nama_obat
                AND YEAR(table_invoice.tgl_beli)= '$tahun_beli' 
                GROUP BY table_invoice.nama_obat 
                ORDER BY totEarned DESC ";

        $run_q = $this->db->query($q);

         $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totEarned" => $data['totEarned'],
                    
                );
            }
            return $hasil;
    }

    public function lowestEarners($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(table_invoice.subtotal) as 'totEarned' FROM obats 
               INNER JOIN table_invoice ON obats.nama_obat=table_invoice.nama_obat
               AND YEAR(table_invoice.tgl_beli)= '$tahun_beli' 
               GROUP BY table_invoice.nama_obat 
               ORDER BY totEarned ASC ";
       
        $run_q = $this->db->query($q);


        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totEarned" => $data['totEarned'],
                    
                );
            }
            return $hasil;
    }



    public function topPurchase($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(pembelian.banyak) as 'totSold' FROM obats 
                INNER JOIN pembelian ON obats.nama_obat=pembelian.nama_obat
                AND YEAR(pembelian.tgl_beli)= '$tahun_beli'
                GROUP BY pembelian.nama_obat ORDER BY totSold DESC ";

        $run_q = $this->db->query($q);

        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totSold" => $data['totSold'],
                    
                );
            }
            return $hasil;
    }


    public function leastPurchase($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(pembelian.banyak) as 'totSold' FROM obats 
                INNER JOIN pembelian ON obats.nama_obat=pembelian.nama_obat 
                 AND YEAR(pembelian.tgl_beli)= '$tahun_beli'
                GROUP BY pembelian.nama_obat ORDER BY totSold ASC ";

        $run_q = $this->db->query($q);

        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totSold" => $data['totSold'],
                    
                );
            }
            return $hasil;
    }

    public function highestPurchase($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(pembelian.subtotal) as 'totEarned' FROM obats 
                INNER JOIN pembelian ON obats.nama_obat=pembelian.nama_obat
                 AND YEAR(pembelian.tgl_beli)= '$tahun_beli' 
                GROUP BY pembelian.nama_obat 
                ORDER BY totEarned DESC ";

        $run_q = $this->db->query($q);

        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totEarned" => $data['totEarned'],
                    
                );
            }
            return $hasil;
    }

    public function lowestPurchase($tahun_beli){
        $q = "SELECT obats.nama_obat, SUM(pembelian.subtotal) as 'totEarned' FROM obats 
               INNER JOIN pembelian ON obats.nama_obat=pembelian.nama_obat
                AND YEAR(pembelian.tgl_beli)= '$tahun_beli'
               GROUP BY pembelian.nama_obat 
               ORDER BY totEarned ASC ";
       
        $run_q = $this->db->query($q);

        $hasil = array();
        
            foreach($run_q->result_array() as $data){
                $hasil[] = array(
                    "nama_obat" => $data['nama_obat'],
                    "totEarned" => $data['totEarned'],
                    
                );
            }
            return $hasil;
    }



  

    


    function expired(){
        return $this->db->query('SELECT * FROM obats WHERE tgl_kadaluarsa BETWEEN DATE_SUB(NOW(), INTERVAL 40 YEAR) AND NOW()'); 
    }

    function almostex(){
        return $this->db->query('SELECT * FROM obats WHERE tgl_kadaluarsa BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 60 DAY)');
    }

    function outstock(){        
        return $this->db->query('SELECT * FROM obats WHERE jmlh_stok BETWEEN 0 AND 0');           
    }

    function almostout(){        
        return $this->db->query('SELECT * FROM obats WHERE jmlh_stok BETWEEN 1 AND 8');           
    }

    function getStorageLocationByCategory($nama_kategori) {
        $this->db->select('nama_rak_penyimpanan');
        $this->db->from('kategori_obat');
        $this->db->where('nama_kategori', $nama_kategori);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->nama_rak_penyimpanan;
        } else {
            return ''; // Jika tidak ada hasil
        }
    }

     function countstock(){       
      $cs =  $this->db->query('SELECT * FROM obats WHERE jmlh_stok BETWEEN 0 AND 0'); 
        $nullstock = $cs->num_rows();
        return $nullstock;    
    }

    function countex(){       
    $ce = $this->db->query('SELECT * FROM obats WHERE tgl_kadaluarsa BETWEEN DATE_SUB(NOW(), INTERVAL 100 YEAR) AND NOW()');
        $nullex = $ce->num_rows();
        return $nullex;     
    }

    function count_med(){       
      $cm =  $this->db->query('SELECT *, SUM(obats.jmlh_stok) as totStock FROM obats'); 
        if ($cm->num_rows() > 0) {
            foreach ($cm->result() as $get) {
                return $get->totStock;
            }
        }
        else {
            return FALSE;
        }   
    }

    

    function count_cat(){       
      $ck =  $this->db->query('SELECT * FROM kategori_obat'); 
        $stockkat = $ck->num_rows();
        return $stockkat;    
    }

    function count_sup(){       
      $cp =  $this->db->query('SELECT * FROM supplier'); 
        $sup = $cp->num_rows();
        return $sup;    
    }

    function count_unit(){       
      $cu =  $this->db->query('SELECT * FROM kategori_obat'); 
        $cunit = $cu->num_rows();
        return $cunit;    
    }

    function count_inv(){       
       $q = "SELECT count(DISTINCT REF) as 'totalTrans' FROM table_invoice";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalTrans;
            }
        }
        else {
            return FALSE;
        }  
    }

    function count_pur(){       
       $q = "SELECT count(DISTINCT REF) as 'totalTrans' FROM pembelian";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalTrans;
            }
        }
        else {
            return FALSE;
        }  
    }

    function count_totpur(){       
       $q = "SELECT *, SUM(pembelian.subtotal) as 'totalTrans' FROM pembelian ";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalTrans;
            }
        }
        else {
            return FALSE;
        }  
    }

    function count_totinv(){       
       $q = "SELECT *, SUM(table_invoice.subtotal) as 'totalTrans' FROM table_invoice";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalTrans;
            }
        }
        else {
            return FALSE;
        }  
    }



    function get_chart_cat(){
        $query = $this->db->query('SELECT nama_kategori, SUM(jmlh_stok) AS jmlh_stok FROM obats GROUP BY nama_kategori');
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "nama_kategori" => $data['nama_kategori'],
                    "jmlh_stok" => $data['jmlh_stok'],
                );
            }
            return $hasil;
    }


    function get_chart_unit(){
        $query = $this->db->query('SELECT unit, SUM(jmlh_stok) AS jmlh_stok FROM obats GROUP BY unit');
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "unit" => $data['unit'],
                    "jmlh_stok" => $data['jmlh_stok'],
                );
            }
            return $hasil;
    }



    function get_chart_trans($tahun_beli){
        
        $query = $this->db->query("SELECT month.month_name as month, SUM(table_invoice.subtotal) AS total 
            FROM month LEFT JOIN table_invoice ON (month.month_num = MONTH(table_invoice.tgl_beli) AND YEAR(table_invoice.tgl_beli)= '$tahun_beli')
     GROUP BY month.month_name  ORDER BY month.month_num  ");
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "month" => $data['month'],
                    "total" => $data['total'],
                );
            }
            return $hasil;

    }


    function get_chart_purchase($tahun_beli){
        
        $query = $this->db->query("SELECT month.month_name as month, SUM(pembelian.subtotal) AS total 
            FROM month 
            LEFT JOIN pembelian ON (month.month_num = MONTH(pembelian.tgl_beli)  
            AND YEAR(pembelian.tgl_beli)= '$tahun_beli')
        GROUP BY month.month_name ORDER BY month.month_num");
        
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "month" => $data['month'],
                    "total" => $data['total'],
                );
            }
            return $hasil;

    }

   
    function get_gabung($tahun_beli){
        
       $query = $this->db->query("SELECT m.month_name as month, 
                   i.total_inv, 
                   p.total_pur
                FROM month m
                LEFT JOIN (SELECT MONTH(tgl_beli) as month, 
                            SUM(subtotal) as total_inv  
                            FROM table_invoice
                            WHERE YEAR(tgl_beli)= '$tahun_beli'
                            GROUP BY month) i  ON (m.month_num = i.month)    
                LEFT JOIN (SELECT MONTH(tgl_beli) as month, 
                            SUM(subtotal) as total_pur
                            FROM  pembelian 
                            WHERE YEAR(tgl_beli)= '$tahun_beli'
                            GROUP BY month) p ON (m.month_num = p.month )
                ORDER BY m.month_num");
        
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "month" => $data['month'],
                    "total_inv" => $data['total_inv'],
                    "total_pur" => $data['total_pur'],
                    
                    
                );
            }
            return $hasil;

    }



   


    public function get_report(){
        $q = "SELECT month.month_name as month, 
            SUM(pembelian.subtotal) AS total1,
            SUM(table_invoice.subtotal) AS total2  
            FROM month 
            LEFT JOIN pembelian ON month.month_num = MONTH(pembelian.tgl_beli)
            AND YEAR(pembelian.tgl_beli)= '2018'  
            LEFT JOIN table_invoice ON month.month_num = MONTH(table_invoice.tgl_beli)
            AND YEAR(table_invoice.tgl_beli)= '2018' 
            GROUP BY month.month_name ORDER BY month.month_num";
       
        $run_q = $this->db->query($q);

        if($run_q->num_rows() > 0){
            return $run_q->result();
        }

        else{
            return FALSE;
        }
    }


     


     function get_tot($tahun_beli){       
         $query = $this->db->query("SELECT *, (SELECT *, 
                            SUM(subtotal) as total_inv  
                            FROM table_invoice
                            WHERE YEAR(tgl_beli)= '2018'
                            )  
                LEFT JOIN (SELECT *, 
                            SUM(subtotal) as total_pur
                            FROM  pembelian 
                            WHERE YEAR(tgl_beli)= '2018'
                            )  
                ");
        
        $hasil = array();
        
            foreach($query->result_array() as $data){
                $hasil[] = array(
                    "month" => $data['month'],
                    "total_inv" => $data['total_inv'],
                    "total_pur" => $data['total_pur'],
                    
                    
                );
            }
            return $hasil;
    }







    



}







