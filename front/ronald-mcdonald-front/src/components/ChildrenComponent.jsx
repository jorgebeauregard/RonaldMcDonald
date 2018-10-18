import React, { Component } from 'react';
import {Table, Tr, Td} from "reactable";
import axios from 'axios';
import './ChildrenComponent.css';

export default class ChildrenComponent extends Component {
    state = {
        children: [],
    };

    async componentDidMount(){
        await axios.get('http://10.50.87.216:8000/api/children').then(res => {
            this.setState({children: res.data});
        });
    }

    renderRow(){
        return(
            this.state.children.map(child =>
                <Tr key={child.id}>
                    <Td column="ID">{child.id}</Td>
                    <Td column="Nombre">{child.names}</Td>
                    <Td column="Apellido paterno">{child.flast_name}</Td>
                    <Td column="Apellido materno">{child.mlast_name}</Td>
                    <Td column="Género">{child.sex}</Td>
                    <Td column="Edad">{child.birthday}</Td>
                    <Td column="Ubicación">{child.locality}</Td>
                    <Td column="Info.">
                        <div className="columns">
                            <div className="column">
                                <a className="button has-background-primary has-text-white" href={'/children/'+child.id}>
                                    <span className="icon is-small">
                                    <i className="fas fa-info"></i>
                                    </span>
                                </a>
                            </div>
                        </div>    
                    </Td>
                </Tr> 
            )
        )
    }
    
    

    renderTable() {
        return (
            <div className="hack1">
                <div className="hack2">
                    <Table className="table is-bordered is-fullwidth is-hoverable has-text-black scrollable"
                    filterable={['Nombre','Género', 'Edad', 'Ubicación', 'Apellido paterno', 'Apellido materno']}
                    noDataText="No se encontraron registros"
                    previousPageLabel="Anterior"
                    nextPageLabel="Siguiente"
                    itemsPerPage={20}
                    currentPage={0}
                    sortable={true}>

                    {this.renderRow()}

                    </Table>
                </div>
            </div>
        )
    }

    render() {
        return (
        <div>
            <div className="columns is-multiline">
                <div className="column is-full margin-top">
                    <div className="card has-background-success">
                        <div className="card-content">
                            <p className="title is-3 has-text-white">Niños registrados</p>
                        </div>
                    </div>
                </div>

                <div className="column is-full">
                    <div className="card">
                        <div className="card-content">
                            {this.renderTable()}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        )
    }
}