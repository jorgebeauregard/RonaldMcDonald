import React, { Component } from 'react';
import axios from 'axios';
import {global} from './../global';

import TitleCard from './../General Purpose/TitleCard';
import RoomCard from './RoomCard';

import Fade from 'react-reveal';

class RoomsComponent extends Component {
    state = {
        rooms:[]
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/room/kids').then(res => {
            this.setState({rooms: res.data.data.rooms});
            console.log(this.state.rooms);
        });
    }

    renderRooms(){
        return(
            this.state.rooms.map(room =>
                <div className="column is-2-desktop is-full-mobile" key={room.id}>
                    <Fade bottom>
                        <RoomCard id={room.id} availability={room.child_name ? 'false' : 'true'} child={room.child_name ? room.child_name : ''}></RoomCard>
                    </Fade>
                </div>
            )
        )
    }

    render() { 
        return ( 
            <div>
                <div className="columns margin-top">
                    <div className="column is-12">
                        <Fade top>
                            <TitleCard title="Habitaciones" background="primary"></TitleCard>
                        </Fade>
                    </div>
                </div>

                <div className="columns is-multiline is-mobile">
                    {this.renderRooms()}
                </div>
                
            </div>
        );
    }
}
 
export default RoomsComponent;