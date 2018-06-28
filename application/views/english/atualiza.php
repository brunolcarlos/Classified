<?php 


foreach ($dados as $make) : ?>

<?= $make['modelo']."<br>"; ?>
<?= $make['id']."<br>"; ?>

<?php 
$id = $make['id'];
$makes = $make['make'];
$modelo = $make['make']." ".$make['modelo'];

$this->db->select("*");
$this->db->from("anuncios");
$this->db->where("id",$id);
$this->db->where('anuncios.modelo LIKE', '%'.$makes.'%');
$like =  $this->db->count_all_results();


if ($make) {

	if (!$like) {

		$this->db->query("update anuncios set modelo = '$modelo' where id ='$id'");
		$this->db->query("update anuncios set make = '' where id ='$id'");
	}
	
}


?>


<?php endforeach; ?>