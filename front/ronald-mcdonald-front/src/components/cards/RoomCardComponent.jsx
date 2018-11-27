import React from 'react';

const RoomCardComponent = props => {
    return ( 
        <div className={props.available ? "card has-background-success animated zoomIn" : "card has-background-danger animated zoomIn"}>
            <div className="card-content">
                <p className="title is-size-2 has-text-white has-text-centered">{props.name}</p>
                <p className="subtitle is-size-6 has-text-white has-text-centered">{props.available ? "Vacía" : "Ocupado"}</p>
                <p className="subtitle is-size-6 has-text-white has-text-centered">Francisco Julián Huerta y Munive De La Rosa</p>
            </div> 
        </div>  
    );
}
 
export default RoomCardComponent;