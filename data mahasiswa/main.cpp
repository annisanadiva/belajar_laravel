#include <iostream>
#include <string>

using namespace std;

struct Nilai {
    float absen;
    float tugas;
    float uts;
    float uas;
    float nilai_akhir;
    char nilai_huruf;
};

struct Mahasiswa {
    string npm;
    string nama;
    string prodi;
    string kelas;
    Nilai nilai;
};

void hitungNilaiAkhir(Nilai &nilai) {
    nilai.nilai_akhir = 0.1 * nilai.absen + 0.2 * nilai.tugas + 0.3 * nilai.uts + 0.4 * nilai.uas;

    if (nilai.nilai_akhir > 80) {
        nilai.nilai_huruf = 'A';
    } else if (nilai.nilai_akhir > 70) {
        nilai.nilai_huruf = 'B';
    } else if (nilai.nilai_akhir > 60) {
        nilai.nilai_huruf = 'C';
    } else {
        nilai.nilai_huruf = 'D';
    }
}

void inputMahasiswa(Mahasiswa mahasiswa[], int &jumlah) {
    if (jumlah < 20) {
        cout << "Masukkan NPM: ";
        cin >> mahasiswa[jumlah].npm;
        cout << "Masukkan Nama: ";
        cin.ignore();
        getline(cin, mahasiswa[jumlah].nama);
        cout << "Masukkan Prodi: ";
        cin.ignore();
        getline(cin, mahasiswa[jumlah].prodi);
        cout << "Masukkan Kelas: ";
        cin >> mahasiswa[jumlah].kelas;
        cout << "Masukkan Nilai Absen: ";
        cin >> mahasiswa[jumlah].nilai.absen;
        cout << "Masukkan Nilai Tugas: ";
        cin >> mahasiswa[jumlah].nilai.tugas;
        cout << "Masukkan Nilai UTS: ";
        cin >> mahasiswa[jumlah].nilai.uts;
        cout << "Masukkan Nilai UAS: ";
        cin >> mahasiswa[jumlah].nilai.uas;

        hitungNilaiAkhir(mahasiswa[jumlah].nilai);

        jumlah++;
    } else {
        cout << "Maaf, data mahasiswa sudah penuh." << endl;
    }
}

void tampilMahasiswa(Mahasiswa mahasiswa[], int jumlah) {
    for (int i = 0; i < jumlah; i++) {
        cout << "NPM Mahasiswa: " << mahasiswa[i].npm << endl;
        cout << "Nama Mahasiswa: " << mahasiswa[i].nama << endl;
        cout << "Program Studi: " << mahasiswa[i].prodi << endl;
        cout << "Kelas: " << mahasiswa[i].kelas << endl;
        cout << "Nilai Absen: " << mahasiswa[i].nilai.absen << endl;
        cout << "Nilai Tugas: " << mahasiswa[i].nilai.tugas << endl;
        cout << "Nilai UTS: " << mahasiswa[i].nilai.uts << endl;
        cout << "Nilai UAS: " << mahasiswa[i].nilai.uas << endl;
        cout << "Nilai Akhir: " << mahasiswa[i].nilai.nilai_akhir << endl;
        cout << "Nilai Huruf: " << mahasiswa[i].nilai.nilai_huruf << endl;
        cout << "-------------------------" << endl;
    }
}

void editMahasiswa(Mahasiswa mahasiswa[], int jumlah, string npm) {
    for (int i = 0; i < jumlah; i++) {
        if (mahasiswa[i].npm == npm) {
            cout << "Masukkan Nama Baru: ";
            cin.ignore();
            getline(cin, mahasiswa[i].nama);
            cout << "Masukkan Prodi Baru: ";
            cin.ignore();
            getline(cin, mahasiswa[i].prodi);
            cout << "Masukkan Kelas Baru: ";
            cin >> mahasiswa[i].kelas;
            cout << "Masukkan Nilai Absen Baru: ";
            cin >> mahasiswa[i].nilai.absen;
            cout << "Masukkan Nilai Tugas Baru: ";
            cin >> mahasiswa[i].nilai.tugas;
            cout << "Masukkan Nilai UTS Baru: ";
            cin >> mahasiswa[i].nilai.uts;
            cout << "Masukkan Nilai UAS Baru: ";
            cin >> mahasiswa[i].nilai.uas;

            hitungNilaiAkhir(mahasiswa[i].nilai);
            cout << "Data mahasiswa berhasil diubah." << endl;
            return;
        }
    }
    cout << "Data mahasiswa dengan NPM " << npm << " tidak ditemukan." << endl;
}

void hapusMahasiswa(Mahasiswa mahasiswa[], int &jumlah, string npm) {
    for (int i = 0; i < jumlah; i++) {
        if (mahasiswa[i].npm == npm) {
            for (int j = i; j < jumlah - 1; j++) {
                mahasiswa[j] = mahasiswa[j + 1];
            }
            jumlah--;
            cout << "Data mahasiswa berhasil dihapus." << endl;
            return;
        }
    }
    cout << "Data mahasiswa dengan NPM " << npm << " tidak ditemukan." << endl;
}

int main() {
    Mahasiswa mahasiswa[20];
    int jumlah = 0;
    char pilihan;
    string npm;

    do {
        cout << "\n Program Manajemen Data Mahasiswa Universitas X" << endl;
        cout << "Menu Program: " << endl;
        cout << "a. Input Data Mahasiswa" << endl;
        cout << "b. Tampil Data Mahasiswa" << endl;
        cout << "c. Edit Data Mahasiswa" << endl;
        cout << "d. Hapus Data Mahasiswa" << endl;
        cout << "e. Keluar" << endl;
        cout << "Silakan pilih menu: ";
        cin >> pilihan;

        switch (pilihan) {
            case 'a':
                inputMahasiswa(mahasiswa, jumlah);
                break;
            case 'b':
                tampilMahasiswa(mahasiswa, jumlah);
                break;
            case 'c':
                cout << "Masukkan NPM Mahasiswa yang akan diedit: ";
                cin >> npm;
                editMahasiswa(mahasiswa, jumlah, npm);
                break;
            case 'd':
                cout << "Masukkan NPM Mahasiswa yang akan dihapus: ";
                cin >> npm;
                hapusMahasiswa(mahasiswa, jumlah, npm);
                break;
            case 'e':
                cout << "Program selesai. Terima kasih." << endl;
                break;
            default:
                cout << "Pilihan tidak sesuai. Silakan masukan pilihan kembali." << endl;
        }
    } while (pilihan != 'e');

    return 0;
}
