<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->

<!-- jquery -->
<script src="{{ asset('storage/jquery/jquery-3.2.1.min.js') }}" crossorigin="anonymous"></script>

<!-- popper -->
<script src="{{ asset('storage/jquery/popper.min.js') }}" crossorigin="anonymous"></script>

<!--bootstrap javascript-->
<script src="{{ asset('storage/bootstrap/bootstrap-4.0.0-beta.2-dist/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>



<script>
	// 
// dss calculate
	function DSSCalc() {
		document.getElementById('myResult_value').value = 0;

		nilai_ipa = document.getElementById('myNilai_ipa').value;
		nilai_ips = document.getElementById('myNilai_ips').value;
		nilai_bhs = document.getElementById('myNilai_bhs').value;

		// nilai_ipa = 77.75;
		// nilai_ips = 77.00;
		// nilai_bhs = 79.50;

		angket_1 = document.getElementById('myAngket_1').value;
		angket_2 = document.getElementById('myAngket_2').value;
		angket_3 = document.getElementById('myAngket_3').value;

		psikotes_1 = document.getElementById('myPsikotes_1').value;
		psikotes_2 = document.getElementById('myPsikotes_2').value;

		if(angket_1 == 'ipa') {
			nilai_angket_ipa = 3;
			if(angket_2 == 'ips') {
				nilai_angket_ips = 2;
				if(angket_3 == 'bhs') {
					nilai_angket_bhs = 1;
				}
				else {
					nilai_angket_bhs = 'x';
				}
			}
			else if(angket_2 == 'bhs') {
				nilai_angket_bhs = 2;
				if(angket_3 == 'ips') {
					nilai_angket_ips = 1;
				}
			}
			else {
				nilai_angket_ips = 'x';
				nilai_angket_bhs = 'x';
			}
		}
		else if(angket_1 == 'ips') {
			nilai_angket_ips = 3;
			if(angket_2 == 'ipa') {
				nilai_angket_ipa = 2;
				if(angket_3 == 'bhs') {
					nilai_angket_bhs = 1;
				}
				else {
					nilai_angket_bhs = 'x';
				}
			}
			else if(angket_2 == 'bhs') {
				nilai_angket_bhs = 2;
				if(angket_3 == 'ipa') {
					nilai_angket_ipa = 1;
				}
			}
			else {
				nilai_angket_ipa = 'x';
				nilai_angket_bhs = 'x';
			}
		}
		else if(angket_1 == 'bhs') {
			nilai_angket_bhs = 3;
			if(angket_2 == 'ipa') {
				nilai_angket_ipa = 2;
				if(angket_3 == 'ips') {
					nilai_angket_ips = 1;
				}
				else {
					nilai_angket_ips = 'x';
				}
			}
			else if(angket_2 == 'ips') {
				nilai_angket_ips = 2;
				if(angket_3 == 'ipa') {
					nilai_angket_ipa = 1;
				}
			}
			else {
				nilai_angket_ipa = 'x';
				nilai_angket_ips = 'x';
			}
		}

		if(psikotes_1 == 'ipa') {
			nilai_psikotes_ipa = 2;
			if(psikotes_2 == 'ips') {
				nilai_psikotes_ips = 1;
				nilai_psikotes_bhs = 0;
			}
			else if(psikotes_2 == 'bhs') {
				nilai_psikotes_bhs = 1;
				nilai_psikotes_ips = 0;
			}
			else {
				nilai_psikotes_ips = 'x';
				nilai_psikotes_bhs = 'x';
			}
		}
		else if(psikotes_1 == 'ips') {
			nilai_psikotes_ips = 2;
			if(psikotes_2 == 'ipa') {
				nilai_psikotes_ipa = 1;
				nilai_psikotes_bhs = 0;
			}
			else if(psikotes_2 == 'bhs') {
				nilai_psikotes_bhs = 1;
				nilai_psikotes_ipa = 0;
			}
			else {
				nilai_psikotes_ipa = 'x';
				nilai_psikotes_bhs = 'x';
			}
		}
		else if(psikotes_1 == 'bhs') {
			nilai_psikotes_bhs = 2;
			if(psikotes_2 == 'ipa') {
				nilai_psikotes_ipa = 1;
				nilai_psikotes_ips = 0;
			}
			else if(psikotes_2 == 'ips') {
				nilai_psikotes_ips = 1;
				nilai_psikotes_ipa = 0;
			}
			else {
				nilai_psikotes_ipa = 'x';
				nilai_psikotes_ips = 'x';
			}
		}

		hasil_ipa = ((nilai_ipa*1) * 0.7) + (nilai_angket_ipa * 0.2) + (nilai_psikotes_ipa * 0.1);
		hasil_ips = ((nilai_ips*1) * 0.7) + (nilai_angket_ips * 0.2) + (nilai_psikotes_ips * 0.1);
		hasil_bhs = ((nilai_bhs*1) * 0.7) + (nilai_angket_bhs * 0.2) + (nilai_psikotes_bhs * 0.1);

		console.log('nilai ipa = '+nilai_ipa);
		console.log('nilai ips = '+nilai_ips);
		console.log('nilai bhs = '+nilai_bhs);

		console.log('nilai angket ipa = '+nilai_angket_ipa);
		console.log('nilai angket ips = '+nilai_angket_ips);
		console.log('nilai angket bhs = '+nilai_angket_bhs);

		console.log('nilai psikotes ipa = '+nilai_psikotes_ipa);
		console.log('nilai psikotes ips = '+nilai_psikotes_ips);
		console.log('nilai psikotes bhs = '+nilai_psikotes_bhs);

		console.log('hasil ipa = '+hasil_ipa);
		console.log('hasil ips = '+hasil_ips);
		console.log('hasil bhs = '+hasil_bhs);

		if((hasil_ipa >= hasil_ips) && (hasil_ipa >= hasil_bhs)) {
			nilai_hasil = 'IPA';
		}
		else if((hasil_ips >= hasil_ipa) && (hasil_ips >= hasil_bhs)) {
			nilai_hasil = 'IPS';
		}
		else if((hasil_bhs >= hasil_ipa) && (hasil_bhs >= hasil_ips)) {
			nilai_hasil = 'BHS';
		}

		// nilai_hasil = 255;

		document.getElementById('myResult_value').value = nilai_hasil;
	}
</script>