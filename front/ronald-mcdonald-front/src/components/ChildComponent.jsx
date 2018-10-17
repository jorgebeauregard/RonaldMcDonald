import React, { Component } from 'react';
import './ChildComponent.css';


class ChildComponent extends Component {
    state = {}

    render() { 
        return ( 
            <div>
                <nav className="level is-mobile">
                    <div className="level-left">
                        <div className="level-item margin-top">
                            <div>
                            <p className="title is-3">Luis Pérez</p>
                            </div>
                        </div>
                    </div>
                    <div className="level-right">
                        <div className="level-item">
                            <a class="button is-danger margin-top">
                                <span class="icon is-small">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span>Check-out</span>
                            </a>
                        </div>
                    </div>
                </nav>

                <div className="columns is-multiline">
                    <div className="column is-two-fifths">
                        <div className="columns is-multiline">
                            <div className="column is-fullwdith">
                                <div className="card has-background-danger">
                                    <div className="card-content">
                                        <p className="title is-3 has-text-white">Información general</p>
                                    </div>
                                </div>
                            </div>

                            <div className="column is-full">
                                <div className="card animated zoomIn">
                                    <div className="card-content">
                                        <div className="columns">
                                            <div className="column">
                                                <p className="title is-4 ">Habitación:</p>
                                                <p className="subtitle ">2</p>
                                            </div>
                                            <div className="column">
                                                <p className="title is-4 ">Ubicación:</p>
                                                <p className="subtitle en-hospital">En hospital</p>
                                            </div>
                                            <div className="column">
                                                <p className="title is-4 ">Fecha de ingreso:</p>
                                                <p className="subtitle ">15/9/18</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="column is-full">
                                <div className="card has-background-success">
                                    <div className="card-content">
                                        <p className="title is-3 has-text-white">Familiares</p>
                                    </div>
                                </div>
                            </div>

                            <div className="column is-12">
                                <div className="card animated zoomIn">
                                    <div className="card-content">
                                        <div className="columns">
                                            <div className="column">
                                                <a className="button is-success margin-bottom is-pulled-left"><span class="icon"><i class="fa fa-plus"></i></span><span>Agregar familiar</span></a>
                                                <br/>
                                            </div>
                                        </div>
                                        <div className="overflow">
                                            <table className="table is-fullwidth padding-bottom is-hoverable is-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Parentesco</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Juan Pérez</td>
                                                        <td>Abuelo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luisa Pérez</td>
                                                        <td>Mamá</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Julián Pérez</td>
                                                        <td>Hermano</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="column is-three-fifths">
                        <div className="columns is-multiline">

                            <div className="column is-full">
                                <div className="card has-background-primary">
                                    <div className="card-content">
                                        <p className="title is-3 has-text-white">Información de estancia actual</p>   
                                    </div>
                                </div>
                            </div>

                            <div className="column is-full">
                                <div className="card animated zoomIn">
                                    <div className="card-content">
                                        <div className="columns">
                                            <div className="column">
                                                <p className="title is-4 ">Habitación:</p>
                                                <p className="subtitle ">2</p>
                                            </div>
                                            <div className="column">
                                                <p className="title is-4 ">Ubicación:</p>
                                                <p className="subtitle en-hospital">En hospital</p>
                                            </div>
                                            <div className="column">
                                                <p className="title is-4 ">Fecha de ingreso:</p>
                                                <p className="subtitle ">15/9/18</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="column is-full">
                                <div className="card has-background-warning">
                                    <div className="card-content">
                                        <p className="title is-3 has-text-white">Datos personales</p>
                                    </div>
                                </div>
                            </div>

                            <div className="column is-full">
                                <div className="card animated zoomIn">
                                    <div className="card-content">
                                        <div className="content">
                                            <div className="columns is-multiline">
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Fecha de nacimiento:</p>
                                                    <p className="subtitle ">15 de julio</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Edad:</p>
                                                    <p className="subtitle ">12 años</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Género:</p>
                                                    <p className="subtitle ">Masculino</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Escolaridad:</p>
                                                    <p className="subtitle ">Primaria</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Dirección:</p>
                                                    <p className="subtitle ">Orión Sur #1593</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Colonia:</p>
                                                    <p className="subtitle ">Villas Orión</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Localidad:</p>
                                                    <p className="subtitle ">Cholula</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Municipio:</p>
                                                    <p className="subtitle ">San Andrés Cholula</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Código postal:</p>
                                                    <p className="subtitle ">72825</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Estado:</p>
                                                    <p className="subtitle ">Puebla</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Zona:</p>
                                                    <p className="subtitle ">Urbana</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Estado Socieconómico:</p>
                                                    <p className="subtitle "></p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Salarios:</p>
                                                    <p className="subtitle "></p>
                                                </div>
                                            </div>
                                        </div>
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
 
export default ChildComponent;