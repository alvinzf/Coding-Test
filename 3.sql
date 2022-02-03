-- a
SELECT siswa.nama, pelajaran.nama_pelajaran, pelajaran.kelas FROM siswa INNER JOIN pelajaran on siswa.kelas = pelajaran.kelas;

--b
SELECT kelas, COUNT(id) as jml_siswa FROM siswa GROUP BY kelas;
