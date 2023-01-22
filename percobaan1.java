public class siswa {

    int no_absen;
    String nis, nama_siswa, tmp_lahir, tgl_lahir;
    double nilai_ipa, nilai_ips;

    public void infoSiswa(){
        system.out.println("----- DATA SISWA -----\n");
    }

    public void main setNis(String i) {
        nis=i;
    }

    public void setNama(String i) {
        nama_siswa=i;
    }

    public void setTtl(String i, String j) {
        tmp_lahir = i;
        tgl_lahir = j;
    }

    public void main setNilai(double nipa, double nips) {
        nilai_ipa=nipa; //method constructor 
        nilai_ips=nips;// method void : tidak mengembalikan nilai
    }

}