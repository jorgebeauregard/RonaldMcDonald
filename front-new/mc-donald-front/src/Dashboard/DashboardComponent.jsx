import React, { Component } from 'react';
import {Fade} from 'react-reveal';
import axios from 'axios';
import { global } from './../global';

import ToolsCard from './ToolsCard';
import InformationCard from './InformationCard';
import TitleCard from '../General Purpose/TitleCard';
import AtHospitalCard from './AtHospitalCard';
import AtHomeCard from './AtHomeCard';

class DashboardComponent extends Component {
    state = { 
        data: {}
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/dashboard').then(res => {
            this.setState({data: res.data})
        });
    }
    
    render() { 
        return ( 
            <div>
                <div className="columns is-multiline margin-top">
                    <div className="column is-12">
                        <Fade top>
                            <TitleCard title="Menú principal" background="primary"/>
                        </Fade>
                    </div>
                    <div className="column is-2">
                        <Fade left>
                            <ToolsCard/>
                        </Fade>
                    </div>
                    <div className="column is-10">
                        <Fade right>
                            <InformationCard data={this.state.data}/>
                        </Fade>
                    </div>
                    <div className="column is-6">
                        <Fade left>
                            <AtHospitalCard/>
                        </Fade>
                    </div>
                    <div className="column is-6">
                        <Fade right>
                            <AtHomeCard/>
                        </Fade>
                    </div>
                </div>
            </div> 
        );
    }
}
 
export default DashboardComponent;