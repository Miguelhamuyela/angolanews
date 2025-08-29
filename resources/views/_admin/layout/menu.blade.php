<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin/dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ url('assets/images/logoNgolaLong.png') }}" alt="SOS" class="logo logo-lg">
                <img src="{{ url('assets/images/logoNgola.png') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Menu</label>
                </li>

                {{-- Menu Dashboard --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Visão geral</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/">Gestão de contatos</a></li>
                        {{-- <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li> --}}
                    </ul>
                </li>

                {{-- Menu Types Categories --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-list"></i></span>
                        <span class="nxl-mtext">Tipos de Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategories.index') }}">Lista
                                de Tipos de Categorias</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategory.create') }}">Novo
                                Tipo de Categoria</a></li>
                    </ul>
                </li>

                {{-- Menu Category --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('admin.categories.index') }}">Category</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Category
                                Create</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Events --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Eventos</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.index') }}">Lista de
                                Eventos </a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.create') }}">Novo
                                Evento</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                    </ul>
                </li>

                {{-- Menu Authors --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Autor</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.author.index') }}">Listan de
                                Autor</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.author.create') }}">Novo
                                Autor</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu News --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Notícias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.index') }}">Lista de
                                Notícias</a></li>
                </li>
                <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.create') }}">Nova Notícia</a>
                </li>
            </ul>
            </li>

            {{-- Menu Tags --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-tag"></i></span>
                    <span class="nxl-mtext">Tags</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tags.index') }}">Tag</a></li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tag.create') }}">Nova Tag</a>
                    </li>
                </ul>
            </li>

            {{-- Menu Comments --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-edit"></i></span>
                    <span class="nxl-mtext">Comentários</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comments.index') }}">Comentários</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comment.create') }}">Criar Comentário</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu publications --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-archive"></i></span>
                    <span class="nxl-mtext">Publicações</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.publication.index') }}">Publicações</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.publication.create') }}">Criar Publicação</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu videos --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-video"></i></span>
                    <span class="nxl-mtext">Videos</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.index') }}">Videos</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.create') }}">Criar Vídeo</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu galery --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-image"></i></span>
                    <span class="nxl-mtext">Galeria</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.index') }}">Galeria</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.create') }}">Criar Galeria</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{--
                    {{-- <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/payment">Payment</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/payment/invoiceView">Invoice View</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/payment/invoiceCreate">Invoice Create</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/customers">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/customers/customersView">Customers
                                    View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/customers/customersCreate">Customers
                                    Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/leads">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/leads/leadsView">Leads View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/leads/leadsCreate">Leads Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/projects">Projects</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/projects/projectsView">Projects View</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/projects/projectsCreate">Projects
                                    Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsLists">Lists</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsTables">Tables</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsCharts">Charts</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsStatistics">Statistics</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="/Widgets/widgetsMiscellaneous">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsGeneral">General</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsSeo">SEO</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsTags">Tags</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsEmail">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsTasks">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsLeads">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsSupport">Support</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsFinance">Finance</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsGateways">Gateways</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsCustomers">Customers</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="/Settings/settingsLocalization">Localization</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsRecaptcha">reCAPTCHA</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="/Settings/settingsMiscellaneous">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-power"></i></span>
                            <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="/Login/authLoginCover">Cover</a>
                                    </li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Login/authLoginMinimal">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Login/authLoginCreative">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Register</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Register/authRegisterCover">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Register/authRegisterMinimal">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Register/authRegisterCreative">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Error-404</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="/Error/auth404cover">Cover</a>
                                    </li>
                                    <li class="nxl-item"><a class="nxl-link" href="/Error/auth404minimal">Minimal</a>
                                    </li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Error/auth404creative">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Reset Pass</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="/Reset/authResetCover">Cover</a>
                                    </li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Reset/authResetMinimal">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Reset/authResetCreative">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Verify OTP</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/VerifyOTP/authVerifyCover">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/VerifyOTP/authVerifyMinimal">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/VerifyOTP/authVerifyCreative">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Maintenance</span><span class="nxl-arrow"><i
                                            class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Maintenance/authMaintenanceCover">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Maintenance/authMaintenanceMinimal">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link"
                                            href="/Maintenance/authMaintenanceCreative">Creative</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-life-buoy"></i></span>
                            <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#/">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="/Help/help-knowledgebase">KnowledgeBase</a></li>
                            <li class="nxl-item"><a class="nxl-link" href=".docs/documentations">Documentations</a>
                            </li>
                        </ul>
                    </li> --}}
            </ul>
        </div>
    </div>
    </div>
</nav>
