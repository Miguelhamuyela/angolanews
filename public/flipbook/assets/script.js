let pdfDoc = null;
let numPages = 0;

const modalElement = document.getElementById('exampleModal');
modalElement.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget; // O link que abriu o modal
    const pdfUrl = button.getAttribute('data-pdf-url');
    const title = button.getAttribute('data-title');

    if (!pdfUrl) {
        alert('PDF não disponível.');
        return;
    }

    // Atualiza o título do modal
    const modalTitle = modalElement.querySelector('#exampleModalLabel');
    modalTitle.textContent = title || 'Visualização do PDF';

    // Configura o worker do pdf.js
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';

    // Carrega o PDF via URL (em vez de file local)
    pdfjsLib.getDocument(pdfUrl).promise.then(function (pdf) {
        pdfDoc = pdf;
        numPages = pdf.numPages;

        document.getElementById('number-pages').textContent = numPages;
        const book = document.getElementById('book');
        book.innerHTML = ''; // Limpa conteúdo anterior

        // Destroi turn.js anterior se existir
        if ($('#book').turn('is')) {
            $('#book').turn('destroy');
        }

        // Inicializa turn.js
        $('#book').turn({
            width: 800,
            height: 600,
            pages: numPages,
            autoCenter: true,
            elevation: 50,
            acceleration: true,
            when: {
                turning: function (e, page) {
                    var range = $(this).turn('range', page);
                    for (let p = range[0]; p <= range[1]; p++) {
                        if (!document.getElementById('page-' + p)) {
                            renderPage(p);
                        }
                    }
                },
                turned: function (e, page) {
                    document.getElementById('page-number').value = page;
                }
            }
        });

        renderPage(1); // Renderiza a primeira página
    }).catch(function (error) {
        console.error('Erro ao carregar PDF:', error);
        alert('Falha ao carregar o PDF. Verifique o arquivo.');
    });
});

function renderPage(pageNum) {
    pdfDoc.getPage(pageNum).then(function (page) {
        const viewport = page.getViewport({ scale: 1.5 });
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');

        canvas.height = viewport.height;
        canvas.width = viewport.width;

        page.render({ canvasContext: context, viewport: viewport }).promise.then(function () {
            const img = document.createElement('img');
            img.src = canvas.toDataURL();
            img.className = "img-fluid";

            const pageDiv = document.createElement('div');
            pageDiv.className = 'page';
            pageDiv.id = 'page-' + pageNum;
            pageDiv.appendChild(img);

            $('#book').turn('addPage', pageDiv, pageNum);
        });
    });
}

// Botões de navegação
document.getElementById('prev-page').addEventListener('click', function () {
    $('#book').turn('previous');
});

document.getElementById('next-page').addEventListener('click', function () {
    $('#book').turn('next');
});

document.getElementById('page-number').addEventListener('keydown', function (e) {
    if (e.keyCode === 13) {
        $('#book').turn('page', this.value);
    }
});

// Limpa ao fechar o modal (opcional, para reset)
modalElement.addEventListener('hidden.bs.modal', function () {
    if ($('#book').turn('is')) {
        $('#book').turn('destroy');
    }
    document.getElementById('book').innerHTML = '';
    document.getElementById('page-number').value = '';
    document.getElementById('number-pages').textContent = '';
});