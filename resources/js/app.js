require('./bootstrap');
import Swal from 'sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// Exemplo de uso
Swal.fire({
    title: 'Olá!',
    text: 'SweetAlert2 instalado via NPM!',
    icon: 'success',
    confirmButtonText: 'Fechar'
});
