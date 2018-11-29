import React from 'react';
import {Link} from 'react-router-dom';

const ToolsCard = () => {
    return ( 
        <div className="card">
            <div className="card-content">
                <p className="title is-3">
                    Acciones
                </p>
                <Link to="/rooms"><button className="button is-warning is-fullwidth is-medium has-text-white is-size-4-mobile">Check-in</button></Link>
                <a className="button is-primary is-fullwidth is-medium margin-top-small is-size-4-mobile">Registrar niño</a>
                <br/>
            </div>
        </div> 
    );
}
 
export default ToolsCard;