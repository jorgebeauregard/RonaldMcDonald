import React, { Component } from 'react';
import {Fade} from 'react-reveal';
import { global } from './../global';
import axios from 'axios';
import TitleCard from './../General Purpose/TitleCard';
import TitleCardSmall from './../General Purpose/TitleCardSmall'
import GeneralInformationCard from './GeneralInformationCard';
import CompanionCard from './CompanionCard';
import VisitHistoryCard from './VisitHistoryCard';

class ChildComponent extends Component {
    state = { 
        child: {},
        companions: []
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/child/' + this.props.match.params.id)
        .then(res => {
            this.setState({child: res.data});
            console.log(this.state.child);
        })

        await axios.get(global.globalURL + '/child/companions/' + this.props.match.params.id).then(res => {
            this.setState({companions: res.data});
        });
    }

    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column">
                        <Fade top>
                            <TitleCard title={this.state.child.names + ' ' + this.state.child.flast_name + ' ' + this.state.child.mlast_name} background="primary"/>
                        </Fade>                    
                    </div>
                </div>

                <div className="columns is-multiline">
                    <div className="column is-5">
                        <div className="columns is-multiline">
                            <div className="column is-12">
                                <Fade left>
                                    <div className="card">
                                        <div className="card-content">
                                            <TitleCardSmall title="Información de estadía actual" background="success"></TitleCardSmall>
                                            <div className="columns is-multiline margin-top">
                                                <div className="column is-4">
                                                    <p className="title is-5">Ubicación:</p>
                                                    <p className="subtitle has-text-danger">En hospital</p>
                                                </div>
                                                <div className="column is-4">
                                                    <p className="title is-5">Fecha de ingreso:</p>
                                                    <p className="subtitle">15/05/2018</p>
                                                </div>
                                                <div className="column is-4">
                                                    <p className="title is-5">Doctor:</p>
                                                    <p className="subtitle">Juan Pablo Flores</p>
                                                </div>
                                                <div className="column is-4">
                                                    <p className="title is-5">Diagnóstico:</p>
                                                    <p className="subtitle">Diabetes</p>
                                                </div>
                                                <div className="column is-4">
                                                    <p className="title is-5">Tratamiento:</p>
                                                    <p className="subtitle">No azúcar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Fade>
                            </div>
                            <div className="column is-12">
                                <Fade left>
                                    <CompanionCard/>
                                </Fade>
                            </div>
                        </div>
                    </div>
                        
                    <div className="column is-7">
                        <div className="columns is-multiline">
                            <div className="column is-12">
                                <Fade right>
                                    <GeneralInformationCard data={this.state.child}/>
                                </Fade>
                            </div>
                            <div className="column is-12">
                                <Fade right>
                                    <VisitHistoryCard/>
                                </Fade>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
         );
    }
}
 
export default ChildComponent;