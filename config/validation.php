<?php

include 'database.php';

class Forms {

    public function BillingValidate($form_data)
    {
        $data = $form_data;

        if ($data['apartment'] == null || $data['apartment'] == '') {
            $data['apartment'] = 'Not filled';
        }

        $this->SaveBilling($data);
    }

    public function SaveBilling($data) {
        global $db;

        $sql = "INSERT INTO billing (name, country, city, address, apartment, delivery_date) VALUES (?,?,?,?,?,?)";
        $db = $db->prepare($sql);
        $db->execute([$data['name'], $data['country'], $data['city'], $data['address'], $data['apartment'], $data['date']]);
    }

}

?>