import React, { Component } from 'react';
import axios from 'axios';
import {global} from './../global';
import {Link} from 'react-router-dom';

import TitleCard from './../General Purpose/TitleCard';
import RoomCard from './RoomCard';

import Fade from 'react-reveal';

class RoomsComponent extends Component {
    state = {
        rooms:[],
        active_modal: false,
        active_room: null
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/room/kids').then(res => {
            this.setState({rooms: res.data.data.rooms});
            console.log();
        });
    }

    toggleActiveModal(room){
        if(this.state.active_modal){
            this.setState( () => ({
                active_modal: false
            }));
            this.setState( () => ({
                active_room: null
            }));
        }
        else{
            this.setState( () => ({
                active_modal: true
            }));       
        }

        if(room){
            this.setState({active_room: room});
        }
        
    }

    renderRooms(){
        return(
            this.state.rooms.map(room =>
                <div className="column is-2-desktop is-full-mobile is-half-mobile" key={room.id} onClick={()=>{this.toggleActiveModal(room)}}>
                    <Fade>
                        <a><RoomCard id={room.id} availability={room.roomCheckIns.length > 0 ? 'false' : 'true'} child={room.roomCheckIns.length > 0 ? room.roomCheckIns[0].child_name : ''}></RoomCard></a>
                    </Fade>
                </div>
            )
        )
    }

    renderChild(){
        if(this.state.active_room){
            return(
                this.state.active_room.roomCheckIns.map(child=>
                    <li key={child.id}><Link to={'children/' + child.child_id}>{child.child_name}</Link></li>
                )
            )
        }
        else{
            return;
        }
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
                                    {this.state.active_room ? this.renderChild() :""}
                                </ul>
                            </div>
                        </div>
                    </div>
                <button className="modal-close is-large" aria-label="close" onClick={()=>{this.toggleActiveModal()}}></button>
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