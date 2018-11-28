import React, { Component } from 'react';
import logo from './../mcdonaldhouselogo.png';
import {Link} from 'react-router-dom';

class Toolbar extends Component {
    state = { 
        active: false
    }

    toggleMenu(){
        return this.state.active ? "navbar-menu is-active" : "navbar-menu";
    }

    toggleBurger(){
        return this.state.active ? "navbar-burger burger is-active margin-top" : "navbar-burger burger margin-top"
    }

    render() { 
        return ( 
        <nav className="navbar" role="navigation" aria-label="main navigation">
            <div className="container is-fluid">
                <div className="navbar-brand">
                    <a href="/"><img className="nav-logo logo" src={logo}/></a>
                
                    <a role="button" className={this.toggleBurger()} aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" onClick={() => this.setState({ active: !this.state.active })}>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
        
                <div className={this.toggleMenu()}>
                    <div className="navbar-end margin-top">
                        <div className="navbar-item has-dropdown is-hoverable">
                            <a className="navbar-link">
                                Jorge Beauregard
                            </a>
                            <div className="navbar-dropdown is-right">
                                <a className="navbar-item">
                                    Cerrar Sesión
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
      </nav> 
      );
    }
}
 
export default Toolbar;