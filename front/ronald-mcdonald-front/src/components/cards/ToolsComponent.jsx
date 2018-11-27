import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

class ToolsComponent extends Component {
    state = {  }
    render() { 
        return ( 
            <div>
                <div className="card">
                    <div className="card-content">
                        <p className="title is-3 animated zoomIn">Herramientas</p>
                        <a className="button is-success has-text-white is-medium is-fullwidth animated zoomIn">Hacer check-in</a><br/>
                        <Link to="/registerChild"><a className="button is-warning has-text-white is-medium is-fullwidth animated zoomIn">Registrar niño</a></Link>
                    </div>
                </div>
            </div>
        );
    }
}
 
export default ToolsComponent;