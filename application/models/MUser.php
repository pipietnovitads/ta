<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MUser extends CI_Model
{
    public function getUser()
    {
        $query = $this->db->get('user');
        $data = $query->result_array();
        return $data;
    }

    public function tambahUser($post)
    {
        $post['password_user'] = sha1($post['password_user']);

        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);
        $upload_foto = $this->upload->do_upload('gambar_user');

        if ($upload_foto) {
            $post['gambar_user'] = $this->upload->data('file_name');
        }

        $this->db->insert('user', $post);
    }

    public function hapusUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function ambilUser($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('user');
        $data = $query->row_array();
        return $data;
    }

    public function ubahUser($inputan, $id)
    {
        if (!empty($inputan['password_user'])) {
            $inputan['password_user'] = sha1($inputan['password_user']);    
        }else{
            unset($inputan['password_user']);
        }


        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';

        //upload dari libary
        $this->load->library('upload', $config);
        //proses upload
        $upload_foto = $this->upload->do_upload('gambar_user');
        if ($upload_foto) {
            $user_lama = $this->ambilUser($id);
            $foto_lama = $user_lama['gambar_user'];
            unlink("./assets/img/$foto_lama");
            $inputan['gambar_user'] = $this->upload->data('file_name');
        }


        $this->db->where('id_user', $id);
        $this->db->update('user', $inputan);
    }

    public function ubahProfil($inputan, $id, $nama_session)
    {
        $user_lama = $this->ambilUser($id);
        
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';

        //upload dari libary
        $this->load->library('upload', $config);
        //proses upload
        $upload_foto = $this->upload->do_upload('gambar_user');
        if ($upload_foto) {
            $foto_lama = $user_lama['gambar_user'];
            unlink("./assets/img/$foto_lama");
            $inputan['gambar_user'] = $this->upload->data('file_name');
        }else{
            // untuk session
            $inputan['gambar_user'] = $user_lama['gambar_user'];
        }

        $this->db->where('id_user', $id);
        $this->db->update('user', $inputan);

        // mengambil id_user, password, level dari session
        $inputan['id_user'] = $user_lama['id_user'];
        $inputan['password_user'] = $user_lama['password_user'];        
        $inputan['level_user'] = $user_lama['level_user'];

        //session baru
        $this->session->set_userdata($nama_session, $inputan); 
    }

    public function ubahPassword($inputan, $id, $nama_session)
    {
       $user_lama = $this->ambilUser($id);

       //mencocokan inputan password lama dengan password di database
       if (sha1($inputan['password_lama'])==$user_lama['password_user']) {
            if (!empty($inputan['password_baru'])) {
                if ($inputan['password_baru'] == $inputan['password_konfirmasi']) {
                    $inputan_baru['password_user'] = sha1($inputan['password_baru']);
                    $this->db->where('id_user', $id);
                    $this->db->update('user', $inputan_baru);

                    // menyiapkan untuk data session
                    $data_session = $user_lama;
                    $data_session['password_user'] = sha1($inputan['password_baru']);
                    $this->session->set_userdata($nama_session, $data_session);

                    return "sukses"; 
                }else{
                    return "p_konfirmasi_salah";
                }
            }else{
                return "p_kosong";
            }
        }else{
            return "p_lama_salah";
        }
    }
}