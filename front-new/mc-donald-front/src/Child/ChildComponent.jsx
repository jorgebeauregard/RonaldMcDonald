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
        companions: [],
        checkInHistory: [],
        currentData: null
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/child/' + this.props.match.params.id)
        .then(res => {
            this.setState({child: res.data});
        })

        await axios.get(global.globalURL + '/child/checkin/current/' + this.props.match.params.id).then(res => {
            this.setState({currentData: res.data});
            
        });

        for(var i = 0; i<100000; i++){} //Lo siento tanto
        
        await axios.get(global.globalURL + '/child/checkin/' + this.props.match.params.id)
        .then(res => {
            this.setState({checkInHistory: res.data});
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
                        {this.state.currentData ? 
                            <div className="column is-12">
                                <Fade left>
                                    <CurrentCheckInCard data={this.state.currentData}/>
                                </Fade>
                            </div>
                        :
                        ""}
                            <div className="column is-12">
                                <Fade left>
                                    <CompanionCard data={this.state.companions}/>
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
                                    <VisitHistoryCard data={this.state.checkInHistory}/>
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