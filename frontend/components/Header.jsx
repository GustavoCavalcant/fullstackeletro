const Header = () => {
    return (
        
            <nav className="navbar navbar-expand-lg navbar-dark bg-info">
                <a className="navbar-brand ml-3" href="index.html"><img src="imag/fslogo.png" width="110px" /></a>


                <button className="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#collapseNavbar">
                    <span className="navbar-toggler-icon"></span>
                </button>

            
                <div className="collapse navbar-collapse ml-5" id="collapseNavbar">
                    <ul className="nav">
                        <li className="nav-item">
                            <a className="nav-link text-white" href="produtos.html">Produtos</a>
                        </li>
                    </ul>

                </div>
                <div className="collapse navbar-collapse" id="collapseNavbar">
                    <ul className="nav">
                        <li className="nav-item">
                            <a className="nav-link text-white" href="lojas.html">Nossas lojas</a>
                        </li>
                    </ul>

                </div>
                <div className="collapse navbar-collapse" id="collapseNavbar">
                    <ul className="nav">
                        <li className="nav-item">
                            <a className="nav-link text-white" href="contato.html">Contato</a>
                        </li>
                    </ul>

                </div>
                <div className="collapse navbar-collapse" id="collapseNavbar">
                    <ul className="nav">
                        <li className="nav-item">
                            <a className="nav-link text-white disabled" href="pedidos.html">Desativado</a>
                        </li>
                    </ul>

                </div>
            </nav>
        
    );
}