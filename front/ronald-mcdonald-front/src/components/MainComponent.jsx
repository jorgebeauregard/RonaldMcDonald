import React, { Component } from 'react';
import './MainComponent.css';


class MainComponent extends Component {
    state = {  }
    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column">
                        <h2 className="is-size-2 has-text-black has-text-weight-bold">Página principal</h2>
                    </div>
                    <div className="column">
                    <a className="button is-success is-rounded margin-top-extra is-pulled-right is-hidden-mobile is-outlined">
                        <span className="icon is-small"><i className="fas fa-plus"></i></span>
                        <span>Agregar niño</span>
                    </a>
                    <a className="button is-success is-rounded is-hidden-tablet is-outlined">
                        <span className="icon is-small"><i className="fas fa-plus"></i></span>
                        <span>Agregar niño</span>
                    </a>
                    </div>
                </div>

                <div className="columns is-multiline padding-top">
                    <div className="column is-one-quarter">
                        <div className="card">
                            <div className="card-content">
                            
                            </div>
                        </div>
                    </div>
                    <div className="column is-one-quarter">
                        <div className="card">
                            <div className="card-content">
                            
                            </div>
                        </div>
                    </div>
                    <div className="column is-one-quarter">
                        <div className="card">
                            <div className="card-content">
                            
                            </div>
                        </div>
                    </div>
                    <div className="column is-one-quarter">
                        <div className="card">
                            <div className="card-content">
                            
                            </div>
                        </div>
                    </div>
                    <div className="column is-one-quarter">
                        <div className="card">
                            <div className="card-content">
                            
                            </div>
                        </div>
                    </div>
                </div>


            </div>
         );
    }
}
 
export default MainComponent;

