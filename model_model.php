<?php
//todos os registros da tabela


public function get($limit=null, $offset=null){
if($limit):
$this->db->limit($limit, $offset);
$this->db->order_by('id', 'desc');
$query = $this->db->get('tab_noticia', $limit);
if($query->num_rows() > 0):
return $query->result();
else:
return null;
endif;
else:
$this->db->order_by('id', 'desc');
$query = $this->db->get('tab_noticia');
if($query->num_rows() > 0):
return $query->result();
else:
return null;
endif;
endif;
}

function CountAll(){
return $this->db->count_all('tab_noticia');

}