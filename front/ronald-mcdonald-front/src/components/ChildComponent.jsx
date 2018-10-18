import React, { Component } from 'react';
import axios from 'axios';
import './ChildComponent.css';


class ChildComponent extends Component {
    state = {
        child: {},
        companions: []
    };

    async componentDidMount(){
        await axios.get('http://192.168.100.11:8000/api/children/' + this.props.match.params.id).then(res => {
            this.setState({child: res.data});
        });

        await axios.get('http://192.168.100.11:8000/api/children/companions/' + this.props.match.params.id).then(res => {
            console.log(res);
            this.setState({companions: res.data});
        });

    }

    renderCompanions(){
        return(
            this.state.companions.map(companion =>
                <tr key={companion.id}>
                    <td>{companion.names} {companion.flast_name}</td>
                    <td>{companion.relationship_name}</td>
                    <td>
                        <div className="columns">
                            <div className="column">
                                <a className="button has-background-primary has-text-white" href={'/companions/'+companion.id}>
                                    <span className="icon is-small">
                                    <i className="fas fa-info"></i>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </td>
                </tr>
            )
        )
    }

    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column">
                        <p className="title is-3">{this.state.child.names} {this.state.child.flast_name} {this.state.child.mlast_name} </p>
                    </div>
                    <div className="column is-hidden-mobile">
                        <a className="button is-danger is-pulled-right">
                            <span className="icon is-small">
                                <i className="fas fa-sign-out-alt"></i>
                            </span>
                            <span>Check-out</span>
                        </a>
                    </div>
                    <div className="column is-hidden-tablet">
                        <a className="button is-danger">
                            <span className="icon is-small">
                                <i className="fas fa-sign-out-alt"></i>
                            </span>
                            <span>Check-out</span>
                        </a>
                    </div>
                </div>

                <div className="columns is-multilin">
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
                                                <a className="button is-success margin-bottom is-pulled-left"><span className="icon"><i className="fa fa-plus"></i></span><span>Agregar familiar</span></a>
                                                <br/>
                                            </div>
                                        </div>
                                        <div className="overflow">
                                            <table className="table is-fullwidth padding-bottom is-hoverable is-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Parentesco</th>
                                                        <th>Info.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {this.renderCompanions()}
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
                                                    <p className="subtitle ">{this.state.child.birthday}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Edad:</p>
                                                    <p className="subtitle ">12 años</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Género:</p>
                                                    <p className="subtitle ">{this.state.child.sex}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Escolaridad:</p>
                                                    <p className="subtitle ">Primaria</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Dirección:</p>
                                                    <p className="subtitle ">{this.state.child.address_street} {this.state.child.address_number}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Colonia:</p>
                                                    <p className="subtitle ">{this.state.child.neighborhood}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Localidad:</p>
                                                    <p className="subtitle ">{this.state.child.locality}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Municipio:</p>
                                                    <p className="subtitle ">{this.state.child.municipality}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Código postal:</p>
                                                    <p className="subtitle ">{this.state.child.zip_code}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Estado:</p>
                                                    <p className="subtitle ">Puebla</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Zona:</p>
                                                    <p className="subtitle ">{this.state.child.sone_type}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Estado Socieconómico:</p>
                                                    <p className="subtitle ">{this.state.child.social}</p>
                                                </div>
                                                <div className="column is-one-third">
                                                    <p className="title is-4 ">Salarios:</p>
                                                    <p className="subtitle ">{this.state.child.min_wage}</p>
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