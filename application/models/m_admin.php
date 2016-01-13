<?php
class M_admin extends CI_Model{	
	public function home() {
	
		
	
	}
	
	/* kategori */
	public function kategori(){
		return $this->db->get('kategori')->result();
	}
	public function tambah_kategori($data){
	
		$this->db->insert('kategori',$data);	
	}	
		
	public function edit_kategori($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori')->result();
	}
	public function update_kategori($id,$data){
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
	}
	public function hapus_kategori($id){
		$this->db->where('id',$id);
		$this->db->delete('kategori');
	}
	
	/* artikel */
	public function artikel(){
		return $this->db->query("select * from artikel,kategori,users where artikel.kategori=kategori.id and users.id=artikel.author")->result();
	}
	
	public function artikel_act($data){
		$this->db->insert('artikel',$data);		
	}
	
	public function edit_artikel($id){
		$this->db->where('id_artikel',$id);
		return $this->db->get('artikel')->result();
	}
	
	public function update_artikel($data,$id){
		$this->db->where('id_artikel',$id);
		$this->db->update('artikel',$data);
	}
	
	public function hapus_artikel($id){
		$this->db->where('id_artikel',$id);
		$query = $this->db->get('artikel');
		$row = $query->row();
		unlink("./image/$row->foto");
				
		$this->db->delete('artikel', array('id_artikel'=>$id) );
	}
	
	/* pengaturan */

	public function pengaturan(){
		return $this->db->get('pengaturan')->result();
	}
	
	public function update_pengaturan($data){		
		$this->db->update('pengaturan',$data);
	}
	
	/* home View */
	public function tutorial_perkategori($id){
		return $this->db->query("select * from artikel where kategori = '$id'")->num_rows();
	}

	public function single($id){
		return $this->db->query("select * from artikel,users,kategori where artikel.id_artikel='$id' and artikel.kategori=kategori.id and artikel.author=users.id")->result();
	}

	public function artikel_kategori($id){
		$this->db->where('kategori',$id);
		return $this->db->get('artikel')->result();
	}
	public function galery(){

	return $this->db->query("select * from album,users where users.id=album.author")->result();
	 return $this->db->get('album')->result();

	}

	public function album_act($data){

		$this->db->insert('album',$data);
	}

	public function hapus_album($id){
		$this->db->where('id_album',$id);
		$query = $this->db->get('album');
		$row = $query->row();
		unlink("./image/galery/$row->cover_album");
				
		$this->db->delete('album', array('id_album'=>$id) );
	}
	
}