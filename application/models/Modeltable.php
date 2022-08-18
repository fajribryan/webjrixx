<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modeltable extends CI_Model
{
    public function getAlldata_aset()
    {
        return $this->db->get('data_aset')->result_array();
    }

    public function tambahDatadata_aset()
    {
        $data = [
            "Aset" => $this->input->post('Aset', true),
            "Qty" => $this->input->post('Qty', true),
            "Expired" => $this->input->post('Expired', true),
            "Supplier" => $this->input->post('Supplier', true),
            "Cost" => $this->input->post('Cost', true)
        ];
        $this->db->insert('data_aset', $data);
    }
    public function hapusdatadata_aset($id)
    {
        // $this->db->where('user_id', $id);
        $this->db->delete('data_aset', ['No' => $id]);
    }
    public function getdata_asetbyid($id)
    {
        return $this->db->get_where('data_aset', ['No' => $id])->row_array();
    }
    public function editdatadata_aset()
    {
        $data = [
            "Aset" => $this->input->post('Aset', true),
            "Qty" => $this->input->post('Qty', true),
            "Expired" => $this->input->post('Expired', true),
            "Supplier" => $this->input->post('Supplier', true),
            "Cost" => $this->input->post('Cost', true)
        ];
        $this->db->where('No', $this->input->post('No'));
        $this->db->update('data_aset', $data);
    }
    public function caridatadata_aset()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('Aset', $cari);
        $this->db->or_like('Qty', $cari);
        $this->db->or_like('Supplier', $cari);
        $this->db->or_like('Cost', $cari);
        return $this->db->get('data_aset')->result_array();
    }

    public function getkonteksbyid($kode_konteks)
    {
        return $this->db->get_where('konteks_resiko', ['kode_konteks' => $kode_konteks])->row_array();
    }
    public function getkonteks()
    {
        return $this->db->get('konteks_resiko')->result_array();
    }
    public function data_sasaran()
    {
        $this->db->select('*');
        $this->db->from('sasaran');
        $this->db->join('konteks_resiko', 'konteks_resiko.kode_konteks = sasaran.kode_konteks');

        $query = $this->db->get();
        return $query;
    }
    public function data_inisiatif()
    {
        $this->db->select('*');
        $this->db->from('inisiatif');
        $this->db->join('konteks_resiko', 'konteks_resiko.kode_konteks = inisiatif.kode_konteks');

        $query = $this->db->get();
        return $query;
    }
    function join2table()
    {
        $this->db->select('*');
        $this->db->from('sasaran');
        $this->db->join('konteks_resiko', 'konteks_resiko.kode_konteks = sasaran.kode_konteks');
        $query = $this->db->get();
        return $query;
    }
    public function getsasaranbyid($kode_konteks)
    {
        return $this->db->get_where('sasaran', ['kode_konteks' => $kode_konteks])->result_array();
    }
    public function getinisiatifbyid($kode_konteks)
    {
        return $this->db->get_where('inisiatif', ['kode_konteks' => $kode_konteks])->result_array();
    }

    // crud konteks resiko
    public function tambahkonteks()
    {
        $data = [
            "konteks_resiko" => $this->input->post('konteks_resiko'),
            "nama_pemilik" => $this->input->post('nama_pemilik'),
            "periode" => $this->input->post('periode'),
            "kode_konteks" => $this->input->post('kode_konteks'),
        ];
        $this->db->insert('konteks_resiko', $data);
    }
    public function tambahsasaran()
    {
        $this->db->select('*');
        $this->db->from('sasaran');
        $query = $this->db->get();
        $data = [
            "sasaran" => $this->input->post('sasaran'),
            "kode" => $this->input->post('kode'),
            "kode_konteks" => $this->input->post('kode_konteks'),
        ];

        $this->db->where('kode_konteks', $this->input->post('kode_konteks'));
        $this->db->insert('sasaran', $data);
    }
    public function tambahinisiatif()
    {
        $this->db->select('*');
        $this->db->from('inisiatif');
        $query = $this->db->get();
        $data = [
            "inisiatif" => $this->input->post('inisiatif'),
            "kode" => $this->input->post('kode'),
            "kode_konteks" => $this->input->post('kode_konteks'),
        ];
        $this->db->where('kode_konteks', $this->input->post('kode_konteks'));
        $this->db->insert('inisiatif', $data);
    }
    public function editsasaranbyid($data, $id_sasaran)
    {
        $this->db->where('id_sasaran', $id_sasaran);
        $this->db->update('sasaran', $data);
        return TRUE;
    }
    public function getsasaran($id_sasaran)
    {
        return $this->db->get_where('sasaran', ['id_sasaran' => $id_sasaran])->row_array();
    }
    public function getsasaranedit($kode_konteks)
    {
        return $this->db->get_where('sasaran', ['kode_konteks' => $kode_konteks])->result_array();
    }
    public function editprofile()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        $data = [
            "nama" => $this->input->post('nama', true),
            "img" => $this->input->post('img', true),
        ];
        $this->db->where('email', $this->input->post('email'));
        $this->db->update('user', $data);
    }

    public function kondisisehat()
    {
        $sql = "SELECT count(if(kondisi='sehat',kondisi,NULL)) as kondisi,
                        sum(if(kondisi='sehat',asal,NULL)) as asal
                FROM mahasiswa
                ";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function kondisisakit()
    {
        $sql = "SELECT count(if(kondisi='sakit',kondisi,NULL)) as kondisi,
                        sum(if(kondisi='sakit',asal,NULL)) as asal
                FROM mahasiswa
                ";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function kotasal()
    {
        $sql = "SELECT Asal, COUNT(*) AS Jumlah FROM mahasiswa GROUP BY Asal ORDER BY Asal";
        $hasil = $this->db->query($sql);
        if ($hasil) {
            return $hasil->result();
        } else {
            return 0;
        }
    }
    public function mahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function editinisiatifbyid($data, $id_inisiatif)
    {
        $this->db->where('id_inisiatif', $id_inisiatif);
        $this->db->update('inisiatif', $data);
        return TRUE;
    }
    public function getinisiatif($id_inisiatif)
    {
        return $this->db->get_where('inisiatif', ['id_inisiatif' => $id_inisiatif])->row_array();
    }
    public function deleteinisiatif($id_inisiatif)
    {
        $this->db->delete('inisiatif', ['id_inisiatif' => $id_inisiatif]);
    }
    public function deletesasaran($id_sasaran)
    {
        $this->db->delete('sasaran', ['id_sasaran' => $id_sasaran]);
    }
}
