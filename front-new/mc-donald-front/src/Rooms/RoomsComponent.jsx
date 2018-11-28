import React, { Component } from 'react';
import axios from 'axios';
import {global} from './../global';

import TitleCard from './../General Purpose/TitleCard';
import RoomCard from './RoomCard';

import Fade from 'react-reveal';

class RoomsComponent extends Component {
    state = {
        rooms:[],
        active_modal: false,
        child_name: "",
        child_id: 0
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/room/kids').then(res => {
            this.setState({rooms: res.data.data.rooms});
            console.log(this.state.rooms);
        });
    }

    toggleActiveModal(room){
        this.setState( () => ({
            active_modal: !this.state.active_modal
        }));

        if(room){
            this.setState({child_name: room.child_name});
        }
        
    }

    renderRooms(){
        return(
            this.state.rooms.map(room =>
                <div className="column is-2-desktop is-full-mobile is-half-mobile" key={room.id} onClick={()=>{this.toggleActiveModal(room)}}>
                    <Fade>
                        <a><RoomCard id={room.id} availability={room.child_name ? 'false' : 'true'} child={room.child_name ? room.child_name : ''}></RoomCard></a>
                    </Fade>
                </div>
            )
        )
    }

    renderModal(){
        return(
            <div className={this.state.active_modal? 'modal is-active': 'modal'}>
                <div className="modal-background" onClick={()=>{this.toggleActiveModal()}}></div>
                    <div className="modal-content">
                        <div className="card">
                            <div className="card-content">
                                <p className="title is-2 is-size-4-mobile">Niños en el cuarto:</p>
                                <ul>
                                    <li className="is-size-4 is-size-6-mobile">{this.state.child_name}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <button className="modal-close is-large" aria-label="close"  onClick={()=>{this.toggleActiveModal()}}></button>
            </div>
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

                {this.renderModal()}
                
            </div>
        );
    }
}
 
export default RoomsComponent;