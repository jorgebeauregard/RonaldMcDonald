import React, { Component } from 'react';
import logo from '../mcdonaldhouselogo.png';
import './NavBar.css';

class NavBar extends Component {
    state = { 
        isActive: false
    };

    render() { 
        return ( 
            <nav className="navbar is-fixed-top red" role="navigation" aria-label="main navigation">
                <div className="container is-fluid">
                    <div className="navbar-brand">
                        <img className="nav-logo logo"src={logo}/>
                        

                        <div className="navbar-burger burger nav-burger" aria-label="menu" aria-expanded="false" data-target="mainMenu" onClick={this.toggleIsActive}>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </div>
                    </div>

                    <div id="mainMenu" className={this.renderIsActive()}>
                        <div className="navbar-start">
                            
                        </div>

                        <div className="navbar-end">
                            <div className="navbar-item has-dropdown is-hoverable nav-logo">
                                <a className="navbar-link has-text-black">Usuario</a>
                                <div className="navbar-dropdown is-boxed">
                                    <a className="navbar-item">Cerrar Sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
         );
    }

    renderIsActive() {
        return this.state.isActive===true ? "navbar-menu is-active" : "navbar-menu";
    }

    toggleIsActive = () => {
        this.setState({isActive: !this.state.isActive});
    }
}


 
export default NavBar;