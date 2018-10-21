import React, { Component } from 'react';
import DashboardCardComponent from './cards/DashboardCardComponent';
import TitleCardComponent from './cards/TitleCardComponent';
import ToolsComponent from './cards/ToolsComponent';
import {global} from './../global';

import './DashboardComponent.css';


class DashboardComponent extends Component {
    state = { 
        
    }
    render() { 
        return ( 
            <div>
                <div className="columns is-multiline margin-top">
                    <div className="column is-2">
                        <ToolsComponent/>
                    </div>

                    <div className="column is-10 ">
                        <div className="card">
                            <div className="card-content">
                                <div className="columns is-multiline">
                                    <div className="column is-full">
                                        <p className="title is-3 animated zoomIn">Información general</p>
                                    </div>

                                    <div className="column">
                                        <DashboardCardComponent type="registeredChildren"/>
                                    </div>

                                    <div className="column">
                                        <DashboardCardComponent type="availableRooms"/>  
                                    </div>

                                    <div className="column">
                                        <DashboardCardComponent type="childrenAtHospital"/>  
                                    </div>

                                    <div className="column">
                                        <DashboardCardComponent type="childrenAtHome"/>
                                    </div>
                                </div>

                                <div className="columns">
                                    <div className="column">
                                        <TitleCardComponent title="Niños en casa" background="primary"/>
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
                                        <TitleCardComponent title="Niños en hospital" background="danger"/>
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