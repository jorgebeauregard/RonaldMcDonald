import React from 'react';
import DashboardCard from './DashboardCard';
import { Link } from 'react-router-dom';


const InformationCard = (props) => {
    return ( 
        <div className="card">
            <div className="card-content">
                <p className="title is-3">
                    Información general
                </p>
                <div className="columns is-multiline">
                    <div className="column is-3">
                        <Link to="/children"><DashboardCard title="Niños registrados" background="primary" icon="user" subtitle={props.data.total_kids}/></Link>
                    </div>
                    <div className="column is-3">
                        <Link to="/rooms"><DashboardCard title="Habitaciones" background="warning" icon="bed" subtitle={props.data.rooms_occupied + '/37'}/></Link>
                    </div>
                    <div className="column is-3">
                        <DashboardCard title="Niños en hospital" background="danger" icon="hospital" subtitle={props.data.hospital_kids_count}/>
                    </div>
                    <div className="column is-3">
                        <DashboardCard title="Niños en casa" background="success" icon="home" subtitle={props.data.home_kids_count}/>
                    </div>
                </div>
            </div>
        </div>
    );
}
 
export default InformationCard;