<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class singleBlog_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getBlogDate($id)
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            tbl_blog_and_artical

            WHERE id=$id"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    public function getBlogCommentData()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            tbl_comment"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBlogCommentCount()
    {
        $sth = $this->db->prepare(
            "SELECT COUNT(id) AS total_count FROM tbl_comment"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    public function save()
    {
        $data = $_POST;
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        // $entry_datetime = date('Y-m-d');
        $data += array($name, $email, $message, "date_time" => date('Y-m-d H:i:s'));
        return $this->db->insert("", "tbl_comment", $data);
    }
}
