<?php

class Book_model extends CI_Model {

	// method untuk menampilkan data buku
	public function showBook($id = false){
		// membaca semua data buku dari tabel 'books'
		if ($id == false){
			$query = $this->db->get('books');
			return $query->result_array();
		} else {
			// membaca data buku berdasarkan id
			$query = $this->db->get_where('books', array("idbuku" => $id));
			return $query->row_array();
		}
	}
	public function showKat($id = false){
		if ($id == false){
			$query = $this->db->get('kategori');
			return $query->result_array();
		} else {
			// membaca data buku berdasarkan id
			$query = $this->db->get_where('kategori', array("idkategori" => $id));
			return $query->row_array();
		}
	}

	// method untuk hapus data buku berdasarkan id
	public function delBook($id){
		$this->db->delete('books', array("idbuku" => $id));
	}
	public function delKat($idkategori){
		$this->db->delete('kategori', array("idkategori" => $idkategori));
	}

	// method untuk mencari data buku berdasarkan key
	public function findBook($key){

		$query = $this->db->query("SELECT * FROM books WHERE judul LIKE '%$key%' 
									OR pengarang LIKE '%$key%' 
									OR penerbit LIKE '%$key%'
									OR sinopsis LIKE '%$key%'
									OR thnterbit LIKE '%$key%'");
		return $query->result_array();
	}

	// method untuk insert data buku ke tabel 'books'
	public function insertBook($idbuku, $judul, $pengarang, $penerbit, $idkategori, $filename, $sinopsis, $thnterbit){
		$data = array(
					"idbuku" =>$idbuku,
					"judul" => $judul,
					"pengarang" => $pengarang,
					"penerbit" => $penerbit,
					"idkategori" => $idkategori,
					"imgfile" => $filename,
					"sinopsis" => $sinopsis,
					"thnterbit" => $thnterbit			
		);
		$query = $this->db->insert('books', $data);
	}

	public function updatekategori($no, $kategori){
		$data = array("no" 			 => $no,
									"kategori" => $kategori
		);
		$this->db->where('no', $no);
		$query = $this->db->update('kategori', $data);	
	}

	public function update($idbuku, $judul, $pengarang, $penerbit, $idkategori, $filename, $sinopsis, $thnterbit){
		$data = array(
					"idbuku" => $idbuku,
 			    "judul" => $judul,
					"pengarang" => $pengarang,
					"penerbit" => $penerbit,
					"idkategori" => $idkategori,
					"imgfile" => $filename,
					"sinopsis" => $sinopsis,
					"thnterbit" => $thnterbit
		);
		$this->db->where('idbuku', $idbuku);
		$query = $this->db->update('books', $data);
	}

	// method untuk membaca data kategori buku dari tabel 'kategori'
	public function getKategori(){
		$query = $this->db->get('kategori');
		return $query->result_array();
	}

	public function insertKategori($no, $kategoriBaru){  
		$data = array("no" => $no,
									"kategori" => $kategoriBaru);
		$this->db->where('no', $no);
		$query = $this->db->insert('kategori', $data);
	}
  public function jumData(){//untuk pagination
		return $this->db->get('books')->num_rows();
	}
	public function tampildata(){//untuk pagination
		return $this->db->get('books');
	}
	// method untuk menghitung jumlah buku berdasarkan idkategori
	public function countByCat($idkategori){
		$query = $this->db->query("SELECT count(*) as jum FROM books WHERE idkategori = '$idkategori'");
		return $query->row()->jum;
	}
    public function countByBook(){
		$query = $this->db->query ("SELECT count(*) as jum FROM books");
		return $query->row()->jum;
  }
	
}
?>