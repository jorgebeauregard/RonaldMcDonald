import React, { Component } from 'react';
import TitleCard from './../General Purpose/TitleCard';
import TitleCardSmall from './../General Purpose/TitleCardSmall';
import {global} from './../global';
import axios from 'axios';
import {Fade} from 'react-reveal';
class CompanionComponent extends Component {
    state = { 
        companion: {}
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/companion/' + this.props.match.params.id).then(res => {
            this.setState({companion: res.data.data});
        });
        console.log(this.state.companion);
    }

    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column">
                        <Fade top>
                            <TitleCard title={this.state.companion.names + ' ' + this.state.companion.flast_name + ' ' + this.state.companion.mlast_name} background="primary"></TitleCard>
                        </Fade>
                    </div>  
                </div>
                
                <div className="columns">
                    <div className="column">
                        <Fade>
                            <div className="card">
                                <div className="card-content">
                                    <TitleCardSmall title="Información general" background="warning"></TitleCardSmall>
                                    <div className="columns is-multiline margin-top is-mobile">
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Edad:</p>
                                            <p className="subtitle">{this.state.companion.age}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Sexo:</p>
                                            <p className="subtitle">{this.state.companion.sex}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Escolaridad:</p>
                                            <p className="subtitle">{this.state.companion.scholarship}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Identificación:</p>
                                            <p className="subtitle">{this.state.companion.identification}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Salud:</p>
                                            <p className="subtitle">{this.state.companion.health_status}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Trabajo:</p>
                                            <p className="subtitle">{this.state.companion.working}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Ocupación:</p>
                                            <p className="subtitle">{this.state.companion.occupation}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Licencia de trabajo:</p>
                                            <p className="subtitle">{this.state.companion.paid_leave}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Seguro social:</p>
                                            <p className="subtitle">{this.state.companion.healthcare}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Teléfono 2:</p>
                                            <p className="subtitle">{this.state.companion.age}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Dependencias económicas:</p>
                                            <p className="subtitle">{this.state.companion.economic_dependencies}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Dueño de casa:</p>
                                            <p className="subtitle">{this.state.companion.home_owner}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Ayuda económica:</p>
                                            <p className="subtitle">{this.state.companion.rent}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Ingresos mensuales:</p>
                                            <p className="subtitle">{this.state.companion.monthly_income}</p>
                                        </div>
                                        <div className="column is-4-desktop is-6-mobile">
                                            <p className="title is-5">Observaciones:</p>
                                            <p className="subtitle">{this.state.companion.remarks}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Fade>
                    </div>
                </div>
            </div>
        );
    }
}
 
export default CompanionComponent;