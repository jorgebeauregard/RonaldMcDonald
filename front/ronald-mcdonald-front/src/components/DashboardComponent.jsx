import React, { Component } from 'react';
import './DashboardComponent.css';


class DashboardComponent extends Component {
    state = {  }
    render() { 
        return ( 

            <div>
                <div className="columns is-multiline margin-top">
                    <div className="column is-2">
                        <div className="card">
                            <div className="card-content">
                                <p className="title is-3 animated zoomIn">Herramientas</p>
                                <a className="button is-success has-text-white is-medium is-fullwidth animated zoomIn">Hacer check-in</a><br/>
                                <a className="button is-warning has-text-white is-medium is-fullwidth animated zoomIn">Registrar niño</a>
                            </div>
                        </div>
                        
                    </div>

                    <div className="column is-10 ">
                        <div className="card">
                            <div className="card-content">
                                <div className="columns is-multiline">
                                <div className="column is-full">
                                    <p className="title is-3 animated zoomIn">Información general</p>
                                </div>

                                <div className="column">
                                    <a href={'/children'}>
                                    <div className="card has-background-warning animated zoomIn">
                                        <div className="card-content">
                                            <div className="columns">
                                                <div className="column is-one-fifth">
                                                    <span className="icon has-text-white padding">
                                                        <i className="fas fa-3x fa-user"></i>
                                                    </span>
                                                </div>
                                                <div className="column">
                                                    <div className="content">
                                                        <p className="title is-5 has-text-white has-text-right has-text-left-mobile">Niños registrados</p>
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">147</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div className="column">
                                    <div className="card has-background-success animated zoomIn">
                                        <div className="card-content">
                                            <div className="columns">
                                                <div className="column is-one-fifth">
                                                    <span className="icon has-text-white padding">
                                                        <i className="fas fa-3x fa-bed"></i>
                                                    </span>
                                                </div>
                                                <div className="column">
                                                    <div className="content">
                                                        <p className="title is-5 has-text-white has-text-right has-text-left-mobile">Habitaciones</p>
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">27/50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="column">
                                    <div className="card has-background-primary animated zoomIn">
                                        <div className="card-content">
                                            <div className="columns">
                                                <div className="column is-one-fifth">
                                                    <span className="icon has-text-white padding">
                                                        <i className="fas fa-3x fa-home"></i>
                                                    </span>
                                                </div>
                                                <div className="column">
                                                    <div className="content">
                                                        <p className="title is-5 has-text-white has-text-right has-text-left-mobile">Niños en casa</p>
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">14/27</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="column">
                                    <div className="card has-background-danger animated zoomIn">
                                        <div className="card-content">
                                            <div className="columns">
                                                <div className="column is-one-fifth">
                                                    <span className="icon has-text-white padding">
                                                        <i className="fas fa-3x fa-hospital"></i>
                                                    </span>
                                                </div>
                                                <div className="column">
                                                    <div className="content">
                                                        <p className="title is-5 has-text-white has-text-right has-text-left-mobile">Niños en hospital</p>
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">13/27</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="columns">
                                <div className="column">
                                    <div className="card has-background-primary animated zoomIn">
                                        <div className="card-content">
                                            <p className="title is-4 has-text-white">Niños en la casa</p>
                                        </div>
                                    </div>
                                    <br/>
                                    <table className="table is-fullwidth is-striped is-bordered animated zoomIn" >
                                        <thead>
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Habitación</th>
                                            <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Luis Pérez</td>
                                            <td>4</td>
                                            <td><a className="button is-medium is-danger"><span className="icon has-text-white"><i className="fas fa-hospital"></i></span></a></td>                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div className="column">
                                    <div className="card has-background-danger animated zoomIn">
                                        <div className="card-content">
                                            <p className="title is-4 has-text-white">Niños en hospital</p>
                                        </div>
                                    </div>
                                    <br/>
                                    <table className="table is-fullwidth is-striped is-bordered animated zoomIn">
                                        <thead>
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Habitación</th>
                                            <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Luis Pérez</td>
                                            <td>4</td>    
                                            <td><a className="button is-medium is-primary"><span className="icon has-text-white"><i className="fas fa-home "></i></span></a></td>                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

         );
    }
}
 
export default DashboardComponent;