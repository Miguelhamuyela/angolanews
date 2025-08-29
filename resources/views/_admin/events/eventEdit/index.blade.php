@extends('_admin.layout.main')
@section('title', 'Ngola News - Editar Evento')
@section('content-eventEdit')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Event</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Edit</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <div class="dropdown filter-dropdown">
                            <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-filter me-2"></i>
                                <span>Filter</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Role"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Role">Role</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Team"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Team">Team</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Email"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Member"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Member">Member</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Recommendation"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer"
                                            for="Recommendation">Recommendation</label>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-plus me-3"></i>
                                    <span>Create New</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-filter me-3"></i>
                                    <span>Manage Filter</span>
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('admin.event.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- __________________________________________________
                                                                        Criando Formulario Event Create
                                                         _______________________________________________________________-->
                <!-- [ page-header ] end -->

                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <form id="eventForm" action="{{ route('admin.event.update', ['event' => $event]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- como o <form> do html não recebe o metodo ptu por padrão, é necessário essa linha para o nosso arquivo routee entenda que udpdate é medtodo PUT --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    <div class="card-body lead-status">
                                        <div class="mb-5 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Editando Evento :</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Faça as
                                                    alterações necessárias das informações do evento</span>
                                            </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Categoria</label>
                                                <select class="form-select form-control" name="category_id"
                                                    data-select2-selector="status">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" data-bg="bg-primary">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Status:</label>
                                                <select class="form-select form-control" ... name="status"
                                                    data-select2-selector="visibility">
                                                    <option value="1"
                                                        {{ $event->status == 'Ativo' ? 'selected' : '' }}>Ativo
                                                    </option>
                                                    <option value="0"
                                                        {{ $event->status == 'Desativo' ? 'selected' : '' }}>Desativo
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">localização:</label>
                                                <select class="form-select form-control" name="location"
                                                    data-select2-selector="visibility">
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}" data-bg="bg-primary">
                                                            {{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Data de Eventos</label>
                                                <input type="date" class="form-control" name="event_date"
                                                    value="{{ $event->event_date }}" id="date">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="fw-semibold">Title: </label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('title', $event->title ?? '') }}" name="title"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="fw-semibold">Subtitle: </label>
                                                <input type="text" class="form-control" name="subtitle"
                                                    value="{{ old('subtitle', $event->subtitle ?? '') }}"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="mailInput" class="fw-semibold">Cover image: </label>
                                                <input type="file" class="form-control" name="image" id="mailInput"
                                                    placeholder="Upload image...">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="{{ asset('img/events/' . $event->image) }}" alt=""
                                                    height="60" width="60 ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="autorInput" class="fw-semibold">Autor: </label>
                                                <select class="form-control" name="author_id"
                                                    data-select2-selector="country">
                                                    @foreach ($authors as $author)
                                                        <option value="{{ $author->id }}" data-bg="bg-primary">
                                                            {{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="main-container">
                                                    <div class="editor-container editor-container_classic-editor editor-container_include-outline editor-container_include-block-toolbar"
                                                        id="editor-container">
                                                        <div class="editor-container__editor-wrappe">
                                                            <div class="editor-container__sidebar" id="editor-outline">
                                                            </div>
                                                            <div class="editor-container__editor">
                                                                <label for="descriptionInput"
                                                                    class="form-label">Descrição: </label>
                                                                <textarea id="editor" name="description">{{ old('description') }}</textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <button type="submit" class="btn btn-danger"> Salvar
                                                        <i class="feather-save ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </form>

                </div>
                <!-- [ Main Content ] end -->
            </div>

            <!-- [ Main Content ] end -->
        </div>
         <!-- estilo css do editor de texto -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        @media print {
            body {
                margin: 0 !important;
            }
        }

        :root {
            --ck-content-font-family: 'Lato';
            --ck-sidebar-width: 270px;
        }

        .main-container {
            font-family: var(--ck-content-font-family);
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        .editor-container__editor-wrapper {
            display: flex;
            width: fit-content;
        }

        .editor-container_include-outline .editor-container__editor .ck.ck-editor__editable {
            margin-left: 0;
        }

        .editor-container_classic-editor .editor-container__editor {
            min-width: 795px;
            max-width: 795px;
        }

        .editor-container_include-block-toolbar {
            margin-left: 42px;
        }

        .editor-container__sidebar {
            min-width: var(--ck-sidebar-width);
            max-width: var(--ck-sidebar-width);
            margin-top: 28px;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <!-- fim do estilo css do editor de texto -->

    <!-- script do editor de texto -->
    <script src="https://cdn.ckeditor.com/ckeditor5/46.0.2/ckeditor5.umd.js" crossorigin></script>
    <script src="https://cdn.ckeditor.com/ckeditor5-premium-features/46.0.2/ckeditor5-premium-features.umd.js" crossorigin>
    </script>
    <script>
        /**
         * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
         * https://ckeditor.com/ckeditor-5/builder/?redirect=portal#installation/NoRgNARATAdA7DKFJSgBnWgHHKBOPAZkIDZCRCAWKEEkOEuyrEAVldRErlOQgFMAdsjRhQYcJIlg0AXUjEsAQ1IBjCLKA===
         */

        const {
            ClassicEditor,
            AutoImage,
            AutoLink,
            Autosave,
            BalloonToolbar,
            BlockQuote,
            BlockToolbar,
            Bold,
            Bookmark,
            CloudServices,
            Code,
            CodeBlock,
            Essentials,
            Heading,
            Highlight,
            HorizontalLine,
            HtmlEmbed,
            ImageBlock,
            ImageCaption,
            ImageInline,
            ImageInsertViaUrl,
            ImageResize,
            ImageStyle,
            ImageTextAlternative,
            ImageToolbar,
            ImageUpload,
            Indent,
            IndentBlock,
            Italic,
            Link,
            LinkImage,
            List,
            ListProperties,
            MediaEmbed,
            Paragraph,
            PasteFromOffice,
            Strikethrough,
            Table,
            TableCellProperties,
            TableProperties,
            TableToolbar,
            TodoList,
            Underline
        } = window.CKEDITOR;
        const {
            DocumentOutline,
            ExportPdf,
            ExportWord,
            ImportWord,
            TableOfContents
        } = window.CKEDITOR_PREMIUM_FEATURES;

        const LICENSE_KEY =
            'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NTcxMTY3OTksImp0aSI6IjNmMWUyMWY3LTdjY2MtNDhkZi1hMDYxLTcwZDU2NTE1ODdkZiIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjUxNjQ5ZjEwIn0.M5m-E9IgfYYfoOb0Z-HzsmDK8ONBvh_i7hCfH0JKcq0au7DvZHAd5yKJhZnfl2a61jlux4bV6COx_ktp8zdn6w';

        const editorConfig = {
            toolbar: {
                items: [
                    'undo',
                    'redo',
                    '|',
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    '|',
                    'link',
                    'insertTable',
                    'highlight',
                    'blockQuote',
                    'codeBlock',
                    '|',
                    'bulletedList',
                    'numberedList',
                    'todoList',
                    'outdent',
                    'indent'
                ],
                shouldNotGroupWhenFull: false
            },
            plugins: [
                AutoImage,
                AutoLink,
                Autosave,
                BalloonToolbar,
                BlockQuote,
                BlockToolbar,
                Bold,
                Bookmark,
                CloudServices,
                Code,
                CodeBlock,
                DocumentOutline,
                Essentials,
                ExportPdf,
                ExportWord,
                Heading,
                Highlight,
                HorizontalLine,
                HtmlEmbed,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsertViaUrl,
                ImageResize,
                ImageStyle,
                ImageTextAlternative,
                ImageToolbar,
                ImageUpload,
                ImportWord,
                Indent,
                IndentBlock,
                Italic,
                Link,
                LinkImage,
                List,
                ListProperties,
                MediaEmbed,
                Paragraph,
                PasteFromOffice,
                Strikethrough,
                Table,
                TableCellProperties,
                TableOfContents,
                TableProperties,
                TableToolbar,
                TodoList,
                Underline
            ],
            balloonToolbar: ['bold', 'italic', '|', 'link', '|', 'bulletedList', 'numberedList'],
            blockToolbar: ['bold', 'italic', '|', 'link', 'insertTable', '|', 'bulletedList', 'numberedList', 'outdent',
                'indent'
            ],
            documentOutline: {
                container: document.querySelector('#editor-outline')
            },
            exportPdf: {
                stylesheets: [
                    /* This path should point to the content stylesheets on your assets server. */
                    /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-pdf.html */
                    './style.css',
                    /* Export PDF needs access to stylesheets that style the content. */
                    'https://cdn.ckeditor.com/ckeditor5/46.0.2/ckeditor5.css',
                    'https://cdn.ckeditor.com/ckeditor5-premium-features/46.0.2/ckeditor5-premium-features.css'
                ],
                fileName: 'export-pdf-demo.pdf',
                converterOptions: {
                    format: 'Tabloid',
                    margin_top: '20mm',
                    margin_bottom: '20mm',
                    margin_right: '24mm',
                    margin_left: '24mm',
                    page_orientation: 'portrait'
                }
            },
            exportWord: {
                stylesheets: [
                    /* This path should point to the content stylesheets on your assets server. */
                    /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-word.html */
                    './style.css',
                    /* Export Word needs access to stylesheets that style the content. */
                    'https://cdn.ckeditor.com/ckeditor5/46.0.2/ckeditor5.css',
                    'https://cdn.ckeditor.com/ckeditor5-premium-features/46.0.2/ckeditor5-premium-features.css'
                ],
                fileName: 'export-word-demo.docx',
                converterOptions: {
                    document: {
                        orientation: 'portrait',
                        size: 'Tabloid',
                        margins: {
                            top: '20mm',
                            bottom: '20mm',
                            right: '24mm',
                            left: '24mm'
                        }
                    }
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            image: {
                toolbar: [
                    'toggleImageCaption',
                    'imageTextAlternative',
                    '|',
                    'imageStyle:inline',
                    'imageStyle:wrapText',
                    'imageStyle:breakText',
                    '|',
                    'resizeImage'
                ]
            },
            initialData: '',
            licenseKey: LICENSE_KEY,
            link: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                decorators: {
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            menuBar: {
                isVisible: true
            },
            placeholder: 'Type or paste your content here!',
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
            }
        };

        configUpdateAlert(editorConfig);

        ClassicEditor.create(document.querySelector('#editor'), editorConfig);

        /**
         * This function exists to remind you to update the config needed for premium features.
         * The function can be safely removed. Make sure to also remove call to this function when doing so.
         */
        function configUpdateAlert(config) {
            if (configUpdateAlert.configUpdateAlertShown) {
                return;
            }

            const isModifiedByUser = (currentValue, forbiddenValue) => {
                if (currentValue === forbiddenValue) {
                    return false;
                }

                if (currentValue === undefined) {
                    return false;
                }

                return true;
            };

            const valuesToUpdate = [];

            configUpdateAlert.configUpdateAlertShown = true;

            if (!isModifiedByUser(config.licenseKey, '<YOUR_LICENSE_KEY>')) {
                valuesToUpdate.push('LICENSE_KEY');
            }

            if (valuesToUpdate.length) {
                window.alert(
                    [
                        'Please update the following values in your editor config',
                        'to receive full access to Premium Features:',
                        '',
                        ...valuesToUpdate.map(value => ` - ${value}`)
                    ].join('\n')
                );
            }
        }
    </script>
    @endsection
