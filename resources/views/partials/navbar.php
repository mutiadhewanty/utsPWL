<nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item {{ ($tittle === "Home") ? 'active' : '' }}">
                                                <a class="nav-link tm-nav-link" href="/">Home<span class="sr-only"></span></a>
                                            </li>
                                            
                                            <li class="nav-item {{ ($tittle === "About") ? 'active' : '' }}">
                                                <a class="nav-link tm-nav-link" href="/about">About</a>
                                            </li>
                                            <li class="nav-item {{ ($tittle === "Contact") ? 'active' : '' }}">
                                                <a class="nav-link tm-nav-link" href="/contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>