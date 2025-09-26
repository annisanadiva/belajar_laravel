#include <iostream>
using namespace std;

int main() {
    //mendeklarasikan variabel-variabel
    int a[10][10], baris, kolom;

    cout << "\n\t Menampilkan Hasil Tranpose Matriks: \n\n";

    //inputan untuk menentukan jumlah baris dan kolom matriks
    cout << "Input jumlah baris: ";
    cin >> baris;
    cout << "Input jumlah kolom: ";
    cin >> kolom;
    cout << endl;

    //perulangan untuk menginput elemen-elemen matriks
    for(int i = 0; i < baris; i++){
        for(int j = 0; j < kolom; j++){
            cout << "Masukkan elemen matriks [" << i << "][" << j << "]: ";
            cin >> a[i][j];
        }
    }

    //untuk menampilkan atau mencetak matriks sebelum ditranspose
    cout << "\n Matriks sebelum ditranspose: \n\n";
    for(int i = 0; i < baris; i++){
        for(int j = 0; j < kolom; j++){
            cout << " " << a[i][j] << " ";
        }
        cout << endl << endl;
    }

    //untuk menampilkan atau mencetak matriks yang telah ditranspose
    cout << "\n Matriks setelah ditranspose: \n\n";
    for(int i = 0; i < baris; i++){
        for(int j = 0; j < kolom; j++){
            cout << " " << a[j][i] << " "; //cara untuk mentranspose matriks, menukar posisi variabel i dan j
        }
        cout << endl << endl;
    }
    return 0;
}
