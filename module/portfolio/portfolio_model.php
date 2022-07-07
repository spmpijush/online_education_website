<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class portfolio_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function submitQuery($data = array())
    {
        $data += array(
            "entry_datetime" => date('Y-m-d H:i:s'),
            "user_agent" => $_SERVER['HTTP_USER_AGENT']
        );
        return $this->db->insert("", "contact_us_data", $data);
    }
    public function getPortfolioDate()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            tbl_portfolio
            ORDER BY id ASC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
