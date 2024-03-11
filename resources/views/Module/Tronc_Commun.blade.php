@extends('template')
@section('main')
    <div class="mb-0 overscroll  w-4/5 h-4/5 ">
        <canvas class="w-sreen" id="pdf-viewer"></canvas>
    </div>
@endsection
@section('script')
    <script>
        function toggleSubMenu() {
            document.getElementById("submenu").classList.toggle("hidden");
            document.getElementById("arrow").classList.toggle("rotate-0");
        }

        function toggleSubMenu1() {
            document.getElementById("submenu1").classList.toggle("hidden");
            document.getElementById("arrow1").classList.toggle("rotate-0");
        }
    </script>
    <script>
        const canvas = document.getElementById('pdf-viewer');
        const context = canvas.getContext('2d');
        const options = {
            scale: 1.9 // ou toute autre valeur souhaitée
        };

        pdfjsLib.getDocument("{{ asset('document/PROGRAMME COMPLEMENTAIRE TIG SEMESTRE 3 ET 4.pdf') }}")
            .promise.then(pdf => pdf.getPage(1))
            .then(page => {
                const viewport = page.getViewport({
                    scale: options.scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                page.render({
                    canvasContext: context,
                    viewport: viewport,
                    renderInteractiveForms: true,
                    intent: 'display',
                    background: '#fff',
                });
            })
            .catch(error => {
                console.error('Une erreur s\'est produite lors du chargement du PDF :', error);
            });
    </script>
@endsection
