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
                                <p className="title is-3">Herramientas</p>
                                <a className="button is-warning has-text-white is-medium is-fullwidth">Hacer check-in</a><br/>
                                <a className="button is-success has-text-white is-medium is-fullwidth">Agregar niño</a>
                            </div>
                        </div>
                        
                    </div>

                    <div className="column is-10 ">
                        <div className="card">
                            <div className="card-content">
                                <div className="columns is-multiline">
                                <div className="column is-full">
                                    <p className="title is-3">Información general</p>
                                </div>
                                <div className="column">
                                    <div className="card has-background-warning">
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
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">50/50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="column">
                                    <div className="card has-background-success">
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
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">50/50</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>

                                <div className="column">
                                    <div className="card has-background-primary">
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
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">50/50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="column">
                                    <div className="card has-background-danger">
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
                                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">50/50</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="columns">
                                <div className="column">
                                    <div className="card has-background-primary">
                                        <div className="card-content">
                                            <p className="title is-4 has-text-white">Niños en la casa</p>
                                        </div>
                                    </div>
                                    <br/>
                                    <table className="table is-fullwidth is-striped is-bordered">
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
                                            <td><a className="button is-medium is-danger"><span class="icon has-text-white"><i class="fas fa-hospital"></i></span></a></td>                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div className="column">
                                    <div className="card has-background-danger">
                                        <div className="card-content">
                                            <p className="title is-4 has-text-white">Niños en hospital</p>
                                        </div>
                                    </div>
                                    <br/>
                                    <table className="table is-fullwidth is-striped is-bordered">
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
                                            <td><a className="button is-medium is-primary"><span class="icon has-text-white"><i class="fas fa-home "></i></span></a></td>                              
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