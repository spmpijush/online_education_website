<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class pages_model extends Model {

	public function __construct() {
        parent::__construct();
    }

    public function page($params = "") {
        $sth = $this->db->prepare(
            "SELECT 
                page_title, 
                page_content
            FROM
                pages
            WHERE 
                menu_url = :params
            AND is_delete = 0
            ORDER BY menu_order ASC");
        $sth->execute(array(":params" => $params));
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}