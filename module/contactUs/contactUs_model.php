<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class contactUs_model extends Model
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


        // $to      = 'subrata@jigoimpex.com';
        // $subject = 'From Website query';

        // $message = "Name:". $_POST['your_name'];
        // $message .= "\n Contact no:". $_POST['contact'];
        // $message .= "\n email:". $_POST['email'];
        // $message .= "\n Query:". $_POST['query'];

        // $headers = 'From: contact@jigoimpex.com' . "\r\n" .
        //     'Reply-To: contact@jigoimpex.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // $res = mail($to, $subject, $message, $headers);
        // echo $res;
    }
}
