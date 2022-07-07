<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class blog_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getBlogDate()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            tbl_blog_and_artical
            ORDER BY id ASC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBlogCategoryDate()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            tbl_blog_category
            WHERE active=1
            ORDER BY id ASC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getRecentBlogDate($date)
    {
        $sth = $this->db->prepare(
            "SELECT 
            file,heading,sub_heading
            FROM 
            tbl_blog_and_artical
            WHERE date='$date'
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
