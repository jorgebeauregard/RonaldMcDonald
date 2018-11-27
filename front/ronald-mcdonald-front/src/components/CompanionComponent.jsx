import React, { Component } from 'react';
import axios from 'axios';
import './CompanionComponent.css';


class CompanionComponent extends Component {
    state = {
        companion: []
    };

    async componentDidMount(){
        await axios.get('http://127.0.0.1:8000/api/companions/' + this.props.match.params.id)
        .then(res => {
            this.setState({companion: res.data});
            console.log(this.state.companion);
        })
        .catch(function(error){
            window.location.replace('/error');
        });
    }

    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column">
                        <p className="title is-3">{this.state.companion.names} {this.state.companion.flast_name} {this.state.companion.mlast_name}</p>             
                    </div>
                </div>

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
                            
                        </div>
                    </div>

                    <div className="column is-three-fifths">
                        <div className="columns is-multiline">

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
                                            <p className="title is-4 ">Edad:</p>
                                            <p className="subtitle ">{this.state.companion.age} años</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Género:</p>
                                            <p className="subtitle ">{this.state.companion.sex}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Escolaridad:</p>
                                            <p className="subtitle ">{this.state.companion.scholarship}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Identificación:</p>
                                            <p className="subtitle ">{this.state.companion.identification}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Salud:</p>
                                            <p className="subtitle ">{this.state.companion.health_status}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Trabaja:</p>
                                            <p className="subtitle ">{this.state.companion.working}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Ocupación:</p>
                                            <p className="subtitle ">Albañil</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Licencia para no trabajar:</p>
                                            <p className="subtitle ">{this.state.companion.paid_leave}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Seguro social:</p>
                                            <p className="subtitle ">{this.state.companion.healthcare}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Dependientes económicos:</p>
                                            <p className="subtitle ">{this.state.companion.economic_dependencies}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Dueño de casa:</p>
                                            <p className="subtitle ">{this.state.companion.home_owner}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Salarios:</p>
                                            <p className="subtitle ">{this.state.companion.monthly_income}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Apoyo financiero:</p>
                                            <p className="subtitle ">{this.state.companion.financial_aid}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Renta:</p>
                                            <p className="subtitle ">{this.state.companion.rent}</p>
                                        </div>
                                        <div className="column is-one-third">
                                            <p className="title is-4 ">Comentarios:</p>
                                            <p className="subtitle ">{this.state.companion.remarks}</p>
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
 
export default CompanionComponent;