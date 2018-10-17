import React, { Component } from 'react';
import './CompanionComponent.css';


class CompanionComponent extends Component {
    state = {  }
    render() { 
        return ( 
            <div>
                <div className="columns">
                    <div className="column">
                        <div className="card margin-top">
                            <div className="card-content">
                                <h2 className="is-size-2 has-text-black has-text-weight-bold is-size-3-mobile">Juan Pérez</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="columns">
                    <div className="column">
                        <div className="columns is-multiline">
                            <div className="column is-12">
                                <div className="card animated zoomIn">
                                    <div className="card-content">
                                        <p className="title is-3">Información general</p>
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
                        </div>
                        
                    </div>

                    <div className="column is-three-fifths">
                        <div className="card animated zoomIn">
                            <div className="card-content">
                                <p className="title is-3 ">Datos personales</p>
                                <div className="content">
                                    <div className="columns is-multiline">
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Fecha de nacimiento:</p>
                                            <p className="subtitle ">15 de julio</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Edad:</p>
                                            <p className="subtitle ">12 años</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Género:</p>
                                            <p className="subtitle ">Masculino</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Escolaridad:</p>
                                            <p className="subtitle ">Primaria</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Dirección:</p>
                                            <p className="subtitle ">Orión Sur #1593</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Colonia:</p>
                                            <p className="subtitle ">Villas Orión</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Localidad:</p>
                                            <p className="subtitle ">Cholula</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Municipio:</p>
                                            <p className="subtitle ">San Andrés Cholula</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Código postal:</p>
                                            <p className="subtitle ">72825</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Estado:</p>
                                            <p className="subtitle ">Puebla</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Zona:</p>
                                            <p className="subtitle ">Urbana</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Identificación:</p>
                                            <p className="subtitle ">ZVR854123546JT713</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Salud:</p>
                                            <p className="subtitle ">Sano</p>
                                        </div>
                                        <div className="column is-one-quarter">
                                            <p className="title is-4 ">Socieconómico:</p>
                                            <p className="subtitle "></p>
                                        </div>
                                        <div className="column is-one-quarter">
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
         );
    }
}
 
export default CompanionComponent;

