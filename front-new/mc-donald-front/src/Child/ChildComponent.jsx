import React, { Component } from 'react';
import {Fade} from 'react-reveal';
import { global } from './../global';
import axios from 'axios';
import TitleCard from './../General Purpose/TitleCard';
import GeneralInformationCard from './GeneralInformationCard';
import CompanionCard from './CompanionCard';
import VisitHistoryCard from './VisitHistoryCard';
import CurrentCheckInCard from './CurrentCheckInCard';

class ChildComponent extends Component {
    state = { 
        child: {},
    }

    async componentDidMount(){  
        await axios.get(global.globalURL + '/child/' + this.props.match.params.id).then(res => {
            this.setState({child: res.data});
        });
        console.log(this.state.child.checkInHistorial);
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
                            {this.state.child.currentCheckIn ? 
                                <div className="column is-12">
                                    <Fade left>
                                        <CurrentCheckInCard data={this.state.child.currentCheckIn}/>
                                    </Fade>
                                </div>
                            :
                            ""}

                            {<div className="column is-12">
                                <Fade left>
                                    <CompanionCard data={this.state.child.companions}/>
                                </Fade>
                            </div>}
                                
                        </div>
                    </div>
                        
                    <div className="column is-7">
                        <div className="columns is-multiline">
                            <div className="column is-12">
                                <Fade right>
                                    <GeneralInformationCard data={this.state.child}/>
                                </Fade>
                            </div>
                            {<div className="column is-12">
                                <Fade right>
                                    <VisitHistoryCard data={this.state.child.checkInHistorial}/>
                                </Fade>
                            </div>}
                        </div>
                    </div>
                    
                </div>
            </div>
         );
    }
}
 
export default ChildComponent;