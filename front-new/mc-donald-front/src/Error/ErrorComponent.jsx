import React from 'react';

const ErrorComponent = () => {
    return ( 
        <div>
          <div className="columns">
            <div className="column has-text-centered">
                <p className="title is-1">Error</p>
                <p className="subtitle is">No existe conexión con el servidor</p>
            </div>
          </div>
        </div>
    );
}
 
export default ErrorComponent;