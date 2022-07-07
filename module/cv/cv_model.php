<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class cv_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    // public function getAboutPageDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         tbl_about_us
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetch(PDO::FETCH_ASSOC);
    // }

    // public function getPersonalInfoPageDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         tbl_personal_information
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetch(PDO::FETCH_ASSOC);
    // }
    // public function getSkilsDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         tbl_skils
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetchAll(PDO::FETCH_ASSOC);
    // }
    // public function getGalleryDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         tbl_gallery
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetchAll(PDO::FETCH_ASSOC);
    // }
    // public function getEducationDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         education
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetchAll(PDO::FETCH_ASSOC);
    // }
    // public function getWorkExperienceDate()
    // {
    //     $sth = $this->db->prepare(
    //         "SELECT 
    //             * 
    //         FROM 
    //         work_experience
    //         ORDER BY id ASC"
    //     );
    //     $sth->execute();
    //     return $sth->fetchAll(PDO::FETCH_ASSOC);
    // }
}
